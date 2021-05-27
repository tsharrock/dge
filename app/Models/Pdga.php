<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pdga extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'year_approved',
        'diameter',
        'height',
        'rim_depth',
        'rim_width',
        'max_weight',
    ];

    public function masterdisc()
    {
        return $this->belongsTo(MasterDisc::class);
    }
}
