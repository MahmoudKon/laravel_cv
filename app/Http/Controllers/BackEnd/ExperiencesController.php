<?php

namespace App\Http\Controllers\BackEnd;

use App\Experience;
use App\Http\Controllers\Controller;
use App\Http\Requests\TimelineRequest;
use App\User;
use Illuminate\Http\Request;

class ExperiencesController extends Controller
{
    // Index Method
    public function index(Request $request)
    {
        if(auth()->user()->permissions == 'user') { return $this->user($request); }
        if($request->ajax()) {
            $records = $request->records;
            $rows = Experience::where(function ($q) use ($request) {
                return $q->when($request->search, function ($query) use ($request) {
                    return $query->where($request->column, 'like', '%' . $request->search . '%');
                });
            })->latest()->paginate($records);
            return view('backend.experiences.rows', compact('rows'));
        }

        $colomns = ['username', 'degree', 'place', 'description'];
        $count = Experience::count();
        return view('backend/experiences/index', compact('count', 'colomns'));
    }  // end of index

    // Create Method
    public function create()
    {
        $users = User::select('id', 'username')->where('approve', 1)->latest()->get();
        return view('backend/experiences/create', compact('users'));
    }  // end of create

    // Store Method
    public function store(TimelineRequest $request)
    {
        $data = $request->except(['_method', '_token']);
        Experience::create($data);
        return redirect()->route('dashboard.experiences.index');
    }  // end of index

    // Edit Method
    public function edit(Experience $experience)
    {
        $users = User::select('id', 'username')->where('id', $experience->user_id)->get();
        return view('backend/experiences/edit', compact('experience', 'users'));
    }  // end of edit

    // Update Method
    public function update(TimelineRequest $request, Experience $experience)
    {
        $data = $request->except(['_method', '_token']);
        $experience->update($data);
        return redirect()->route('dashboard.experiences.index');
    }  // end of update

    // Destroy Method
    public function destroy(Experience $experience)
    {
        $experience->delete();
        return redirect()->route('dashboard.experiences.index');
    }  // end of destroy

    // Index Method
    public function user(Request $request)
    {
        if($request->ajax()) {
            $records = $request->records;
            $rows = Experience::where(function ($q) use ($request) {
                return $q->when($request->search, function ($query) use ($request) {
                    return $query->where($request->column, 'like', '%' . $request->search . '%');
                });
            })->where('user_id', auth()->user()->id)->latest()->paginate($records);
            // dd($rows);
            return view('backend.experiences.rows', compact('rows'));
        }

        $colomns = ['degree', 'place', 'description'];
        $count = Experience::where('user_id', auth()->user()->id)->count();
        return view('backend/experiences/index', compact('count', 'colomns'));
    }  // end of index
}
