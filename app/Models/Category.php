<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model 
{

    protected $table = 'categories';
    public $timestamps = true;
    protected $fillable = array('name_en', 'name_ar');

    public function meals()
    {
        return $this->hasMany('App\Models\Meal');
    }

}