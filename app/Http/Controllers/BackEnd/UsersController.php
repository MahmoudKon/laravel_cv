<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\CreateUserRequest;
use App\Http\Requests\User\EditUserRequest;
use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
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
            $user = auth()->user();
            return view('backend/users/user', compact('user'));
        }

        if($request->ajax()) {
            $records = $request->records;
            $rows = User::where('permissions', 'user')->where(function ($q) use ($request) {
                return $q->when($request->search, function ($query) use ($request) {
                    return $query->where($request->column, 'like', '%' . $request->search . '%');
                });
            })->latest()->paginate($records);
            // dd($rows);
            return view('backend.users.rows', compact('rows'));
        }

        $colomns = ['User Name', 'Email', 'ID'];
        $count = User::where('permissions', 'user')->count();
        return view('backend/users/index', compact('count', 'colomns'));
    }  // end of index

    // Create Method
    public function create()
    {
        return view('backend/users/create');
    }  // end of create

    // Store Method
    public function store(CreateUserRequest $request)
    {
        $data = $request->except(['_token', '_method', 'password_confirmation', 'image']);
        $data['password'] = sha1($data['password']);

        if ($request->image) {
            $data['image'] = $request->image->hashName();
            $request->image->move(public_path('uploads/images'), $data['image']);
        } //end of if

        $user = User::create($data);

        return redirect()->route('dashboard.users.index');
    }  // end of store

    // Edit Method
    public function edit(User $user)
    {
        return view('backend/users/edit', compact('user'));
    }  // end of edit

    // Update Method
    public function update(EditUserRequest $request, User $user)
    {
        $data = $request->except(['_method', '_token', 'password', 'password_confirmation']);

        if($request['password'] !== null) {
            $data['password'] = $request['password'];
        }

        if(isset($request->image)) {
            $data['image'] = $request->image->hashName();
            $request->image->move(public_path('uploads/images'), $data['image']);

            if($user->image !== 'default.jpg' ) {
                unlink(public_path('uploads/images/' . $user->image));
            }
        }

        $user->update($data);
        return redirect()->route('dashboard.users.index');
    }  // end of update

    // Delete Method
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('dashboard.users.index');
    }  // end of destroy

    // Approve Method
    public function approve(Request $request)
    {
        $user = User::findOrFail($request->id);
        $user->update(['approve' => 1]);
        $countApproves = User::where('permissions', 'user')->where('approve', 0)->count();
        $countUsers = User::where('permissions', 'user')->count();
        $approves = User::where('approve', 0)->limit(5)->get();
        return view('backend.home.includes.approve_list', compact('approves', 'countApproves', 'countUsers'));
    }  // end of approve
}
