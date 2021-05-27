<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Brand;
use App\Models\Pdga;

class MasterDisc extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'pdga_id',
        'brand_id',
        'mold',
        'type_id',
        'speed',
        'glide',
        'turn',
        'fade',
        'stability_id',
        'skill_level_id',
        'flight_chart_img',
    ];

//    public function pdga() {
//        return $this->hasOne(Pdga::class);
//    }
    public function brand() {
        return $this->hasOne(Brand::class, 'id', 'brand_id')->select(['id','brand']);
    }
    public function disc_type() {
        return $this->hasMany(Pdga::class);
    }
//    public function skill_level() {
//        return $this->hasMany(Pdga::class);
//    }
}
