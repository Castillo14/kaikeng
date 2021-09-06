<?php

namespace App\Http\Controllers;

use App\Models\Agency;
use Illuminate\Http\Request;

class AgencyController extends Controller
{
    public function index()
    {
        $agencies = Agency::query()->orderBy('id', 'desc')->get();

        return view('agencies', compact('agencies'));
    }

    public function store(Request $request)
    {
        Agency::updateOrCreate(
            ['id' => $request->id], [
            "email"   => $request->email,
            "phone"   => $request->phone,
            "address" => $request->address,
        ]);

        return redirect()->route('agencies');
    }

    public function destroy($id)
    {
        Agency::destroy($id);

        return redirect()->route('agencies');
    }
}
