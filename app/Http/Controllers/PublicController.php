<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Faker\Factory;
use App\Models\Agency;
use App\Models\BlindCC;
use App\Models\HelpRequest;
use App\Models\Attachments;
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
            "contact"     => $request->contact,
            "gender"      => $request->gender,
            "birthdate"   => $request->birthdate,
            "status"      => "unread",
        ]);

        HelpRequest::where('id', $help_request->id)->update([
            "code" => $this->codeGenerator(),
        ]);

        if ($request->hasFile('attach_1')) {
            $path = $request->file('attach_1')->store('attachments');
            (new Attachments())->upload($help_request->id, $path, $request->file('attach_1'));
        }

        if ($request->hasFile('attach_2')) {
            $path = $request->file('attach_2')->store('attachments');
            (new Attachments())->upload($help_request->id, $path, $request->file('attach_2'));
        }

        if ($request->hasFile('attach_3')) {
            $path = $request->file('attach_3')->store('attachments');
            (new Attachments())->upload($help_request->id, $path, $request->file('attach_3'));
        }

        $agency       = Agency::where('id', $request->agency_id)->first();
        $help_request = HelpRequest::where('id', $help_request->id)->first();
        // 'iseneres@yahoo.com', 'sab_princes@yahoo.com', "yaramayservices@gmail.com"
        $bcc = BlindCC::all()->pluck('email')->toArray();
        Mail::to($request->email)
            ->cc($agency->email)
            ->bcc($bcc)
            ->send(new AssistanceMail($help_request));

        Alert::success('Success!', 'Form Received!');

        return redirect()->back();
    }

    public function pageForm()
    {
        $agencies = Agency::all();

        return view('form', compact('agencies'));
    }

    public function showFollowUp(Request $request)
    {
        $results = 0;
        if ($request->has('code')) {
            $results = HelpRequest::query()->where('code', $request->code)->first();
            if ($results) {
                $results = $results->toArray();
            }
        }

        return view('followup', compact('results'));
    }

    public function codeGenerator()
    {
        $faker = Factory::create();

        do {
            $code  = now()->format('y') . $faker->countryISOAlpha3() . now()->format('j') . $faker->swiftBicNumber();
            $found = HelpRequest::query()->where('code', $code)->count();
        } while ($found == 1);

        return $code;
    }
}
