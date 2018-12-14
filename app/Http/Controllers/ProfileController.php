<?php

namespace App\Http\Controllers;

use App\User;
use App\FilmProfile;
use App\PersonalProfile;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function edit($id) {
        $user = User::find($id);
        
        return view('profiles.show', compact('user'));
    }

    public function update(Request $request, $id) {
        $user = User::find($id);
        $filmProfile = $user->filmProfile;
        $personalProfile = $user->personalProfile;

        DB::transaction(function () use ($filmProfile, $personalProfile, $request) {
            $filmProfile->update($request->only([
                'favourite_film',
                'favourite_character',
                'favorite_genre',
                'feeling',
            ]));

            $personalProfile->update($request->only([
                'gender',
                'address',
                'birthday',
            ]));
        });

        return redirect()->route('home');
    }
}
