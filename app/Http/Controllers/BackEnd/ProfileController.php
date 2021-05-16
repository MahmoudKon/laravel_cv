<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProfileRequest;
use App\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    // Index Method
    public function index($username)
    {
        // Select The True User
        $user = User::where('username', $username)->first();

        if(auth()->user()->permissions == 'user') {
            // If Username Not The auth Send To 404 Page
            if(auth()->user()->username != $username) { return abort(404); }
        }

        // If No User Send To 404 Page
        if($user === null) { return abort(404); }
        // Return To Profile Page
        return view('backend.users.profile.index', compact('user'));
    }  // end of index

    // Edit Method
    public function edit($username)
    {
        // Select The True User
        $user = User::where('username', $username)->first();

        if(auth()->user()->permissions == 'user') {
            // If Username Not The auth Send To 404 Page
            if(auth()->user()->username != $username) { return abort(404); }
        }

        // If No User Send To 404 Page
        if($user === null) { return abort(404); }
        // Return To Profile Page
        return view('backend.users.profile.edit', compact('user'));
    }  // end of edit

    // Update Method
    public function update(ProfileRequest $request, $id)
    {
        dd($request->all());
    }  // end of update
}
