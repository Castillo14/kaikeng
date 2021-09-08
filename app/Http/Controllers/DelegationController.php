<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Agency;
use App\Models\Delegation;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class DelegationController extends Controller
{
    public function index()
    {
        return view('delegations');
    }

    public function table()
    {
        return DataTables::of(Delegation::all())->make(true);
    }

    public function create()
    {
        $agencies = Agency::all();
        $users    = User::all();

        return view('delegations_add', compact('agencies', 'users'));
    }

    public function store(Request $request)
    {
        Delegation::create([
            'agency_id' => $request->agency,
            'user_id'   => $request->user,
        ]);

        return redirect()->route('delegations');
    }
}
