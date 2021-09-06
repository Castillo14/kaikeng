<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserProvince;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\UserUpdateRequest;
use Alert;
use App\Http\Requests\UserRegistrationRequest;

class UserController extends Controller
{
    public function index()
    {
        return view('users');
    }

    public function table()
    {
        $user = DB::table('users')
                  ->select([
                      'users.name',
                      'users.email',
                      'users.id',
                  ]);

        return DataTables::of($user)->make(true);
    }

    public function create()
    {
        return view('users_add');
    }

    public function show($id)
    {
        $user = DB::table('users')
                  ->select([
                      'users.name',
                      'users.email',
                      'users.id',
                  ])
                  ->where('users.id', $id)
                  ->get()[0];

        return view('users_edit', compact('user'));
    }

    public function register(UserRegistrationRequest $request)
    {
        $data           = $request->input();
        $user           = new User();
        $user->name     = $data['name'];
        $user->email    = $data['email'];
        $user->password = Hash::make($data['password']);
        $user->save();

        Alert::success('Success!', 'Account Registered!');

        return redirect()->route('users');
    }

    public function update(UserUpdateRequest $request)
    {
        $data        = $request->input();
        $user        = User::find($data['id']);
        $user->name  = $data['name'];
        $user->email = $data['email'];

        if ($data['password'] != 'fakepassword') {
            $user->password = Hash::make($data['password']);
        }

        $user->save();

        Alert::success('Success!', 'Account Updated!');

        return redirect()->route('users');
    }

    public function destroy($id)
    {
        User::destroy($id);

        Alert::success('Success!', 'Account Deleted!');

        return redirect()->route('users');
    }
}
