<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\HelpRequest;
use Illuminate\Http\Request;
use Alert;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\PublicRequest;

class PublicController extends Controller
{
    public function pageLanding(Request $request)
    {
        return view('landing');
    }

    public function sendForm(PublicRequest $request)
    {
        $help_request = HelpRequest::create([
            "agency_id"   => $request->agency_id,
            "name"        => $request->name,
            "email"       => $request->email,
            "baranggay"   => $request->baranggay,
            "city"        => $request->city,
            "description" => $request->description,
        ]);

        //        Mail::send([], [], function ($message) use ($request) {
        //            $message->to(['iseneres@yahoo.com', 'sab_princes@yahoo.com'])
        //                    ->from('do-not-reply@kaikenghelp-ph.com')
        //                    ->subject("KAIKENG HELP! from Website")
        //                    ->setBody("Fullname: {$request->fullname} <br>
        //                               Contact No.: {$request->contact_no} <br>
        //                               Other Contact No.: {$request->contact_no_other}<br>
        //                               Salaysay.:<br>{$request->salaysay}<br>");
        //        });
        Alert::success('Success!', 'Form Received!');

        return redirect()->back();
    }

    public function pageForm()
    {
        return view('form');
    }
}
