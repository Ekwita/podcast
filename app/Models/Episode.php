<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Episode extends Model
{

    use HasFactory;
    use HasUuids;
    protected $fillable = [
        'title',
        'description',
        'file_path',
        'duration',
        'thumbnail_path',
        'host_name',
        'guest_names',
    ];
}
