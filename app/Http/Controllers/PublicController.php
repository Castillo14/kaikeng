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
            "status"      => "unread",
        ]);

        HelpRequest::where('id', $help_request->id)->update([
            "code" => Factory::create()->countryISOAlpha3() . $help_request->id . Factory::create()->countryISOAlpha3(),
        ]);

        $agency = Agency::where('id', $request->agency_id)->first();
        Mail::to([$help_request->emaill])
            ->cc([$agency->emai])
            ->bcc(["renier.trenuela@gmail.com", "yaramayservices@gmail.com"])
            ->send(new AssistanceMail($help_request));

        Alert::success('Success!', 'Form Received!');

        return redirect()->back();
    }

    public function pageForm()
    {
        $agencies = Agency::all();

        return view('form', compact('agencies'));
    }
}
