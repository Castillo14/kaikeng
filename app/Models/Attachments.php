<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attachments extends Model
{
    use HasFactory;

    protected $fillable = [
        'help_request_id',
        'path',
        'name',
        'file_type',
        'size',
    ];

    public function upload($id, $path, $request)
    {
        $this::create([
            'help_request_id' => $id,
            'path'            => $path,
            'name'            => $request->getFilename(),
            'file_type'       => $request->getType(),
            'size'            => $request->getSize(),
        ]);
    }
}
