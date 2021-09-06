<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HelpRequest extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'agency_id',
        'name',
        'email',
        'baranggay',
        'city',
        'description',
        'code',
        'status',
    ];

    protected $with = ['agency'];

    public function agency()
    {
        return $this->hasOne(Agency::class, 'id', 'agency_id');
    }
}
