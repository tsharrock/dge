<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disc extends Model
{
    use HasFactory;

    protected $fillable = [
        'Brand',
        'Mold',
        'type',
        'speed',
        'glide',
        'turn',
        'fade',
        'current',
        'date_approved'
    ];
}
