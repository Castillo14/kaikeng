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
        return DataTables::of(User::all())->setTransformer(function ($value) {
            $data                 = collect($value)->toArray();
            $data['users_show']   = route('users.show', ['id' => $data['id']]);
            $data['role_display'] = $data['role'] == 1 ? 'Admin' : 'Agency';

            return $data;
        })->make(true);
    }

    public function create()
    {
        return view('users_add');
    }

    public function show($id)
    {
        $user = DB::table('users')
                  ->where('users.id', $id)
                  ->first();

        return view('users_edit', compact('user'));
    }

    public function register(UserRegistrationRequest $request)
    {
        $data           = $request->input();
        $user           = new User();
        $user->name     = $data['name'];
        $user->email    = $data['email'];
        $user->role     = $data['role'];
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
        $user->role  = $data['role'];

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
