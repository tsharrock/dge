<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\MasterDisc;

class UserDisc extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', //maps to user table-> id
        'disc_id', //maps to discmaster-> id
        'pdga_id', //maps to pdga-> id
        'plastic_id',
        'description',
        'sleepy_scale_rating',
        'price',
        'negotiable',
        'shipping_cost',
        'local_only',
        'img_front',
        'img_back',
        'weight',
        'color',
        'stamp',
        'transaction_id', //maps to trasaction table -> id
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function masterdisc() {
        return $this->hasOne(MasterDisc::class, 'id', 'disc_id');
    }
}
