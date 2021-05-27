<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DiscImage extends Model
{
    use HasFactory;

    /**
     * @var array
     */
    protected $fillable = [
        'discmaster_id',
        'color',
        'stamp',
        'img',
        'description',
        'tournament',
        'special_edition',
        'pro_player',
    ];
}
