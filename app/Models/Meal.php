<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Meal extends Model
{

    use SoftDeletes;

    protected $table = 'meals';
    public $timestamps = true;
    protected $fillable = array('name_en', 'description_en', 'price', 'thumbnail', 'day', 'category_id', 'quantity', 'name_ar', 'description_ar');

    public function orders()
    {
        return $this->hasMany('App\Models\Order');
    }

    public function images()
    {
        return $this->hasMany('App\Models\Image');
    }

    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }

}
