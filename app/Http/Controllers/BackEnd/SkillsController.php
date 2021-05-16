<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use App\Http\Requests\SkillRequest;
use App\Skill;
use App\User;
use Illuminate\Http\Request;

class SkillsController extends Controller
{
    // Index Method
    public function index(Request $request)
    {
        if(auth()->user()->permissions == 'user') { return $this->user($request); }
        if($request->ajax()) {
            // Get The Count of Records
            $records = $request->records;
            // Select ALL Skills Where...
            $rows = Skill::with('user')->where(function ($q) use ($request) {
                $q->when($request->search, function ($query) use ($request) {
                            // Seeach In The Skills Table
                    $query->where($request->column, 'like', '%' . $request->search . '%')
                        // Select In Users Table By The Elequent Relation
                        ->orWhereHas('user', function ($q) use ($request) {
                            $q->where($request->column, 'like', '%' . $request->search . '%');
                        });
                });
                // Select The User Name AND ID From The Relation
            })->with(array('user'=>function($query){
                $query->select('id','username');
                // Get The Data AND Make Order By DESC AND Make Pagination
            }))->latest()->paginate($records);
            // Return View
            return view('backend/skills/rows', compact('rows'));
        } // end of if

        $colomns = ['User Name', 'Skill Name', 'Level'];
        $count = Skill::count();
        return view('backend/skills/index', compact('count', 'colomns'));
    } // end of index

    // Create Method
    public function create()
    {
        $users = User::select('id', 'username')->where('approve', 1)->latest()->get();
        return view('backend.skills.create', compact('users'));
    } // end of create

    // Store Method
    public function store(SkillRequest $request)
    {
        $data = $request->except(['_method', '_token']);
        Skill::create($data);
        return redirect()->route('dashboard.skills.index');
    } // end of store

    // Edit Method
    public function edit(Skill $skill)
    {
        $users = User::select('id', 'username')->where('id', $skill->user_id)->get();
        return view('backend.skills.edit', compact('skill', 'users'));
    } // end of edit

    // Update Method
    public function update(SkillRequest $request, Skill $skill)
    {
        $data = $request->except(['_method', '_token']);
        $skill->update($data);
        return redirect()->route('dashboard.skills.index');
    } // end of update

    // Destroy Method
    public function destroy(Skill $skill)
    {
        $skill->delete();
        return redirect()->route('dashboard.skills.index');
    } // end of destroy

    // User Method
    public function user(Request $request)
    {
        if($request->ajax()) {
            // Get The Count of Records
            $records = $request->records;
            // Select ALL Skills Where...
            $rows = Skill::with('user')->where(function ($q) use ($request) {
                $q->when($request->search, function ($query) use ($request) {
                            // Seeach In The Skills Table
                    $query->where($request->column, 'like', '%' . $request->search . '%')
                        // Select In Users Table By The Elequent Relation
                        ->orWhereHas('user', function ($q) use ($request) {
                            $q->where($request->column, 'like', '%' . $request->search . '%');
                        });
                });
                // Select The User Name AND ID From The Relation
            })->with(array('user'=>function($query){
                $query->select('id','username');
                // Get The Data AND Make Order By DESC AND Make Pagination
            }))->where('user_id', auth()->user()->id)->latest()->paginate($records);
            // Return View
            return view('backend/skills/rows', compact('rows'));
        } // end of if

        $colomns = ['Skill Name', 'Level'];
        $count = Skill::where('user_id', auth()->user()->id)->count();
        return view('backend/skills/index', compact('count', 'colomns'));
    } // end of user
}
