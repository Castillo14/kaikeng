<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Delegation;
use App\Models\HelpRequest;
use Yajra\DataTables\DataTables;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('home');
    }

    public function table()
    {
        $agency_ids = Delegation::query()->select(['agency_id'])->where('user_id', auth()->id())->get()->toArray();
        $model      = HelpRequest::query()->when($agency_ids, function ($q) use ($agency_ids) {
            $q->whereIn('agency_id', $agency_ids);
        });

        return DataTables::of($model)->setTransformer(function ($value) {
            $data               = collect($value)->toArray();
            $data['in_5days']   = Carbon::parse($data['created_at'])->addDays(6);
            $data['created_at'] = Carbon::parse($data['created_at'])->format('F j, Y');
            $diffInDays         = Carbon::now()->diffInDays($data['in_5days'], false);

            $data['resolve_date'] = '';
            if ($data['status'] != 'resolved') {
                $data['resolve_date'] = '<span class="badge badge-pill badge-primary">' . $diffInDays . " days left</span>";
                if ($diffInDays <= 0) {
                    $data['resolve_date'] = '<span class="badge badge-pill badge-danger">Overdue</span>';
                }
            }

            return $data;
        })->make(true);
    }

    public function preview($id)
    {
        $results = HelpRequest::find($id);

        return view('form_preview', compact('results'));
    }
}
