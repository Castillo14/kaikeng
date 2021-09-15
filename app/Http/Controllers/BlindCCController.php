<?php

namespace App\Http\Controllers;

use App\Models\BlindCC;
use Illuminate\Http\Request;

class BlindCCController extends Controller
{
    public function index()
    {
        $bccs = BlindCC::all();

        return view('bcc', compact('bccs'));
    }

    public function store(Request $request)
    {
        BlindCC::create([
            'email' => $request->email,
        ]);

        return redirect()->route('bcc');
    }

    public function destroy($id)
    {
        BlindCC::destroy($id);

        return redirect()->route('bcc');
    }
}
