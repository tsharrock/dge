<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plastic extends Model
{
    use HasFactory;

    protected $fillable = [
        'brand_id',
        'plastic_type',
        'description'
    ];
}
