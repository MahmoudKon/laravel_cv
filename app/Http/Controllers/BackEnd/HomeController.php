<?php

namespace App\Http\Controllers\BackEnd;

use App\Education;
use App\Hobby;
use App\Http\Controllers\Controller;
use App\Skill;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        if(auth()->user()->permissions == 'user') { return redirect()->route('dashboard.users.index'); }
        $counts['users'] = User::where('permissions', 'user')->count();
        $counts['users_not_approved'] = User::where('permissions', 'user')->where('approve', 0)->count();
        $counts['skills'] = Skill::count();
        $counts['hobbies'] = Hobby::count();
        $approves = User::where('approve', 0)->limit(5)->get();

        $users = User::where('permissions', 'user')->latest()->limit(5)->get();
        $hobbies = Hobby::with('user')->latest()->limit(5)->get();
        $educations = Education::with('user')->latest()->limit(5)->get();
        return view('backend.home.index', compact('counts', 'approves', 'users', 'hobbies', 'educations'));
    }
}
