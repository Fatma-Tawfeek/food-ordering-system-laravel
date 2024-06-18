<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Wmeal extends Model
{
    use SoftDeletes;

    protected $table = 'wmeals';
    public $timestamps = true;
    protected $fillable = array('name_en', 'name_ar', 'description_en', 'description_ar', 'price', 'thumbnail', 'quantity');

    public function days()
    {
        return $this->belongsToMany('App\Models\Day');
    }

    public function orders()
    {
        return $this->hasMany('App\Models\Order');
    }

    public function images()
    {
        return $this->hasMany('App\Models\Image');
    }


}
