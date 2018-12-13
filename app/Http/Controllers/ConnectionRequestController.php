<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ConnectionRequest;
use App\User;
use App\Review;

class ConnectionRequestController extends Controller
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

        $newRequests = ConnectionRequest::where('to_id', $request->user()->id)
            ->where('status', ConnectionRequest::SENT)
            ->get();

        $friends = User::whereHas('sentConnectionRequests', function ($query) {
            $query->where('status', ConnectionRequest::ACCEPTED);
        })->orWhereHas('receivedConnectionRequests', function ($query) {
            $query->where('status', ConnectionRequest::ACCEPTED);
        })->where('id', '<>', $request->user()->id)->get();

        return view('connect', compact('reviews', 'suggestedUsers', 'newRequests', 'friends'));
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
        ConnectionRequest::create([
            'from_id' => $request->user()->id,
            'to_id' => $request->toId,
            'status' => ConnectionRequest::SENT
        ]);

        $sentUsers = ConnectionRequest::pluck('to_id');
        $suggestedUsers = User::where('id', '<>', $request->user()->id)
            ->whereNotIn('id', $sentUsers)
            ->get();
        $newRequests = ConnectionRequest::where('to_id', $request->user()->id)->get();

        return view('layouts.rightside', compact('suggestedUsers', 'newRequests'));
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
    public function destroy(Request $request, $id)
    {
        $connectionRequest = ConnectionRequest::find($id);
        $connectionRequest->delete();

        $sentUsers = ConnectionRequest::pluck('to_id');
        $suggestedUsers = User::where('id', '<>', $request->user()->id)
            ->whereNotIn('id', $sentUsers)
            ->get();
        $newRequests = ConnectionRequest::where('to_id', $request->user()->id)->get();

        return view('layouts.rightside', compact('suggestedUsers', 'newRequests'));
    }

    public function accept(Request $request, $id) {
        $connectionRequest = ConnectionRequest::find($id);
        $connectionRequest->update([
            'status' => ConnectionRequest::ACCEPTED
        ]);

        return redirect()->route('connect');
;    }
}
