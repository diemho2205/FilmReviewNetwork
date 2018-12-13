<?php

namespace App\Http\Controllers;

use App\User;

class ProfileController extends Controller
{
    public function edit($id) {
        $user = User::find($id);
        
        return view('profiles.show', compact('user'));
    }
}
