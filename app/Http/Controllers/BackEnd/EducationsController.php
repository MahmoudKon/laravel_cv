<?php

namespace App\Http\Controllers\BackEnd;

use App\Education;
use App\Http\Controllers\Controller;
use App\Http\Requests\TimelineRequest;
use App\User;
use Illuminate\Http\Request;

class EducationsController extends Controller
{
    // Index Method
    public function index(Request $request)
    {
        if(auth()->user()->permissions == 'user') { return $this->user($request); }
        if($request->ajax()) {
            $records = $request->records;
            $rows = Education::where(function ($q) use ($request) {
                return $q->when($request->search, function ($query) use ($request) {
                    return $query->where($request->column, 'like', '%' . $request->search . '%');
                });
            })->latest()->paginate($records);
            return view('backend.educations.rows', compact('rows'));
        }

        $colomns = ['degree', 'place', 'description'];
        $count = Education::count();
        return view('backend/educations/index', compact('count', 'colomns'));
    }  // end of index

    // Create Method
    public function create()
    {
        $users = User::select('id', 'username')->where('approve', 1)->latest()->get();
        return view('backend/educations/create', compact('users'));
    }  // end of create

    // Store Method
    public function store(TimelineRequest $request)
    {
        $data = $request->except(['_method', '_token']);
        Education::create($data);
        return redirect()->route('dashboard.educations.index');
    }  // end of index

    // Edit Method
    public function edit(Education $education)
    {
        $users = User::select('id', 'username')->where('id', $education->user_id)->get();
        return view('backend/educations/edit', compact('education', 'users'));
    }  // end of edit

    // Update Method
    public function update(TimelineRequest $request, Education $education)
    {
        $data = $request->except(['_method', '_token']);
        $education->update($data);
        return redirect()->route('dashboard.educations.index');
    }  // end of update

    // Destroy Method
    public function destroy(Education $education)
    {
        $education->delete();
        return redirect()->route('dashboard.educations.index');
    }  // end of destroy

    public function user(Request $request)
    {
        if($request->ajax()) {
            $records = $request->records;
            $rows = Education::where(function ($q) use ($request) {
                return $q->when($request->search, function ($query) use ($request) {
                    return $query->where($request->column, 'like', '%' . $request->search . '%');
                });
            })->where('user_id', auth()->user()->id)->latest()->paginate($records);
            return view('backend.educations.rows', compact('rows'));
        }

        $colomns = ['degree', 'place', 'description'];
        $count = Education::where('user_id', auth()->user()->id)->count();
        return view('backend/educations/index', compact('count', 'colomns'));
    }  // end of index
}
