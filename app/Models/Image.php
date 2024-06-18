<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{

    protected $table = 'images';
    public $timestamps = true;
    protected $fillable = array('url', 'meal_id', 'wmeal_id', 'setting_id');

    public function meal()
    {
        return $this->belongsTo('App\Models\Meal');
    }

    public function wmeal()
    {
        return $this->belongsTo('App\Models\Wmeal');
    }

    public function settings()
    {
        return $this->belongsTo('App\Models\Setting');
    }

}
