<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Review;
use App\Like;
use App\User;
use App\ConnectionRequest;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $reviews = Review::with('comments')->latest()->get();
        $sentUsers = ConnectionRequest::pluck('to_id');
        $receivedUsers = ConnectionRequest::pluck('from_id');
        $suggestedUsers = User::where('id', '<>', $request->user()->id)
            ->whereNotIn('id', $sentUsers)
            ->whereNotIn('id', $receivedUsers)
            ->get();

        dd($suggestedUsers);

        $newRequests = ConnectionRequest::where('to_id', $request->user()->id)
            ->where('status', ConnectionRequest::SENT)
            ->get();
        // dd($request->user()->filmProfile->favourite_film);
        return view('home', compact('reviews', 'suggestedUsers', 'newRequests'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $poster = $request->file('poster');

        if ($poster) {
            $fileExtension = $poster->getClientOriginalExtension();
            $fileName = uniqid(rand(), true) . '.' . $fileExtension;
            $poster->move(public_path('avatar'), $fileName);
        }

        $reviews = $request->only([
            'name',
            'content',
            'character',
            'feeling',
            'rate',
        ]);
        
        $reviews['poster'] = $fileName;
        $request->user()->reviews()->create($reviews);

        return redirect()->route('reviews.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $review = Review::find($id);
        $review->delete();

        return redirect()->back();
    }

    public function like(Request $request)
    {
        $reviewId = $request->reviewId;
        $like = Like::where('user_id', $request->user()->id)
            ->where('review_id', $request->reviewId)
            ->first();
        if (!$like) {
            Like::create([
                'user_id' => $request->user()->id,
                'review_id' => $reviewId,
                'is_disliked' => 0
            ]);
            $message = trans('message.like');
        } else {
            if ($like->is_disliked) {
                $like->is_disliked = 0;
                $like->save();
                $message = trans('message.relike');
            } else {
                $like->is_disliked = 1;
                $like->save();
                $message = trans('message.unlike');
            }
        }

        return response()->json([
            'message' => $message,
        ]);
    }

    public function reviewsForAuth(Request $request) {
        $reviews = Review::with('comments')->where('user_id', $request->user()->id)->latest()->get();
        $sentUsers = ConnectionRequest::pluck('to_id');
        $receivedUsers = ConnectionRequest::pluck('from_id');
        $suggestedUsers = User::where('id', '<>', $request->user()->id)
            ->whereNotIn('id', $sentUsers)
            ->whereNotIn('id', $receivedUsers)
            ->get();

        $newRequests = ConnectionRequest::where('to_id', $request->user()->id)
            ->where('status', ConnectionRequest::SENT)
            ->get();

        return view('factory', compact('reviews', 'suggestedUsers', 'newRequests'));
    }

    public function reviewsForUser(Request $request, $id) {
        $reviews = Review::with('comments')->where('user_id', $id)->latest()->get();
        $sentUsers = ConnectionRequest::pluck('to_id');
        $receivedUsers = ConnectionRequest::pluck('from_id');
        $suggestedUsers = User::where('id', '<>', $request->user()->id)
            ->whereNotIn('id', $sentUsers)
            ->whereNotIn('id', $receivedUsers)
            ->get();

        $newRequests = ConnectionRequest::where('to_id', $request->user()->id)
            ->where('status', ConnectionRequest::SENT)
            ->get();

        return view('factory', compact('reviews', 'suggestedUsers', 'newRequests'));
    }
}
