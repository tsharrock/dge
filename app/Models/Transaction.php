<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'buyer_id',
        'seller_id',
        'price',
        'payment_type',
        'tracking',
        'tracking_link',
        'buyer_rating',
        'buyer_comments',
        'seller_rating',
        'seller_comments',
    ];
}
