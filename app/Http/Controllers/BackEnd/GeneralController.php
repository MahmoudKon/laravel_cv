<?php

namespace App\Http\Controllers\BackEnd;

use App\General;
use App\Http\Controllers\Controller;
use App\Http\Requests\General\CreateGeneralRequest;
use App\Http\Requests\General\EditGeneralRequest;
use App\User;
use Illuminate\Http\Request;

class GeneralController extends Controller
{
    // Construct Method
    public function __construct()
    {
        $this->middleware('admin')->except(['index', 'update']);
    }  // end of construct

    // Index Method
    public function index(Request $request)
    {
        if(auth()->user()->permissions == 'user') {
            $general = auth()->user()->general;
            return view('backend/general/edit', compact('general'));
        }

        if($request->ajax()) {
            $records = $request->records;
            $rows = General::where(function ($q) use ($request) {
                return $q->when($request->search, function ($query) use ($request) {
                    return $query->where($request->column, 'like', '%' . $request->search . '%');
                });
            })->latest()->paginate($records);
            // dd($rows);
            return view('backend.general.rows', compact('rows'));
        }

        $colomns = ['Full Name', 'Website', 'Job', 'Phone', 'About', 'Awards'];
        $count = General::count();
        return view('backend/general/index', compact('count', 'colomns'));
    }  // end of index

    // Create Method
    public function create()
    {
        $users = User::select('id', 'username')->where('approve', 1)->whereDoesntHave('general')->latest()->get();
        return view('backend/general/create', compact('users'));
    }  // end of create

    // Store Method
    public function store(CreateGeneralRequest $request)
    {
        $data = $request->except(['_method', '_token']);
        General::create($data);
        return redirect()->route('dashboard.general.index');
    }  // end of index

    // Edit Method
    public function edit(General $general)
    {
        $users = User::select('id', 'username')->where('id', $general->user_id)->get();
        return view('backend/general/edit', compact('general', 'users'));
    }  // end of edit

    // Update Method
    public function update(EditGeneralRequest $request, General $general)
    {
        $data = $request->except(['_method', '_token']);
        $general->update($data);
        return redirect()->route('dashboard.general.index');
    }  // end of update

    // Destroy Method
    public function destroy(General $general)
    {
        $general->delete();
        return redirect()->route('dashboard.general.index');
    }  // end of destroy

    // User Method
    public function user(Request $request)
    {
        if($request->ajax()) {
            $records = $request->records;
            $rows = General::where(function ($q) use ($request) {
                return $q->when($request->search, function ($query) use ($request) {
                    return $query->where($request->column, 'like', '%' . $request->search . '%');
                });
            })->where('user_id', auth()->user()->id)->latest()->paginate($records);
            // dd($rows);
            return view('backend.general.rows', compact('rows'));
        }

        $colomns = ['Full Name', 'Website', 'Job', 'Phone', 'About', 'Awards'];
        $count = General::where('user_id', auth()->user()->id)->count();
        return view('backend/general/index', compact('count', 'colomns'));
    }  // end of user
}
