<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Faker\Factory;
use App\Models\Agency;
use App\Models\HelpRequest;
use Illuminate\Http\Request;
use Alert;
use App\Mail\AssistanceMail;
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

        HelpRequest::where('id', $help_request->id)->update([
            "code" => Factory::create()->randomKey . $help_request->id,
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

        Mail::to([$help_request->email])->send(new AssistanceMail($help_request));

        Alert::success('Success!', 'Form Received!');

        return redirect()->back();
    }

    public function pageForm()
    {
        $agencies = Agency::all();

        return view('form', compact('agencies'));
    }
}
