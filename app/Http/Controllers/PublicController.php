<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\HelpRequest;
use Illuminate\Http\Request;
use Alert;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{
    public function pageLanding(Request $request)
    {
        return view('landing');
    }

    public function sendForm(Request $request, HelpRequest $model)
    {
        $images = [];
        if ($request->file('image1')) {
            $images[] = $request->file('image1')->storeAs('', $request->file('image1')->getClientOriginalName());
        }
        if ($request->file('image2')) {
            $images[] = $request->file('image2')->storeAs('', $request->file('image2')->getClientOriginalName());
        }
        if ($request->file('image3')) {
            $images[] = $request->file('image3')->storeAs('', $request->file('image3')->getClientOriginalName());
        }

        $model->store($request, $images);
        Mail::send([], [], function ($message) use ($request) {
            $message->to(['iseneres@yahoo.com', 'sab_princes@yahoo.com'])
                    ->from('do-not-reply@kaikenghelp-ph.com')
                    ->subject("KAIKENG HELP! from Website")
                    ->setBody("Fullname: {$request->fullname} <br>
                               Contact No.: {$request->contact_no} <br>
                               Other Contact No.: {$request->contact_no_other}<br>
                               Salaysay.:<br>{$request->salaysay}<br>");
        });
        Alert::success('Success!', 'Form Received!');

        return redirect()->back();
    }

    public function pageForm()
    {
        return view('form');
    }
}
