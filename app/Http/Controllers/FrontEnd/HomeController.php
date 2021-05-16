<?php

namespace App\Http\Controllers\FrontEnd;
use App\Http\Controllers\Controller;
use App\User;

class HomeController extends Controller
{
    // Index Method
    public function index()
    {
        $users = User::where('permissions', 'user')->whereHas('skills')->whereHas('hobbies')->whereHas('general')->whereHas('educations')->latest()->get();
        return view('frontend.home', compact('users'));
    }  // end index method

    // Show Method
    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('frontend.show', compact('user'));
    }  // end show method
}
