<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model 
{

    protected $table = 'settings';
    public $timestamps = true;
    protected $fillable = array('about_en', 'about_ar', 'fb_link', 'insta_link', 'tw_link');

    public function images()
    {
        return $this->hasMany('App\Models\Image');
    }

}