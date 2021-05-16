<?php

namespace App\Http\Controllers\BackEnd;

use App\Hobby;
use App\Http\Controllers\Controller;
use App\Http\Requests\HobbyRequest;
use App\User;
use Illuminate\Http\Request;

class HobbiesController extends Controller
{
    // Index Method
    public function index(Request $request)
    {
        if(auth()->user()->permissions == 'user') { return $this->user($request); }
        if($request->ajax()) {
            // Get The Count of Records
            $records = $request->records;
            // Select ALL hobbies Where...
            $rows = Hobby::with('user')->where(function ($q) use ($request) {
                $q->when($request->search, function ($query) use ($request) {
                            // Seeach In The hobbies Table
                    $query->where($request->column, 'like', '%' . $request->search . '%')
                        // Search In Users Table By The Elequent Relation
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
            return view('backend/hobbies/rows', compact('rows'));
        } // end of if

        $colomns = ['User Name', 'Hobby Name', 'Icon'];
        $count = Hobby::count();
        return view('backend/hobbies/index', compact('count', 'colomns'));
    } // end of index

    // Create Method
    public function create()
    {
        $users = User::select('id', 'username')->where('approve', 1)->latest()->get();
        return view('backend.hobbies.create', compact('users'));
    } // end of create

    // Store Method
    public function store(HobbyRequest $request)
    {
        $data = $request->except(['_method', '_token']);
        Hobby::create($data);
        return redirect()->route('dashboard.hobbies.index');
    } // end of store

    // Edit Method
    public function edit(Hobby $hobby)
    {
        $users = User::select('id', 'username')->where('id', $hobby->user_id)->get();
        return view('backend.hobbies.edit', compact('hobby', 'users'));
    } // end of edit

    // Update Method
    public function update(HobbyRequest $request, Hobby $hobby)
    {
        $data = $request->except(['_method', '_token']);
        $hobby->update($data);
        return redirect()->route('dashboard.hobbies.index');
    } // end of update

    // Destroy Method
    public function destroy(Hobby $hobby)
    {
        $hobby->delete();
        return redirect()->route('dashboard.hobbies.index');
    } // end of destroy

    // User Method
    public function user(Request $request)
    {
        if($request->ajax()) {
            // Get The Count of Records
            $records = $request->records;
            // Select ALL hobbies Where...
            $rows = Hobby::with('user')->where(function ($q) use ($request) {
                $q->when($request->search, function ($query) use ($request) {
                            // Seeach In The hobbies Table
                    $query->where($request->column, 'like', '%' . $request->search . '%')
                        // Search In Users Table By The Elequent Relation
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
            return view('backend/hobbies/rows', compact('rows'));
        } // end of if

        $colomns = ['Hobby Name', 'Icon'];
        $count = Hobby::where('user_id', auth()->user()->id)->count();
        return view('backend/hobbies/index', compact('count', 'colomns'));
    } // end of user
}
