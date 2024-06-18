<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Day_Wmeal extends Model
{

    protected $table = 'day_wmeal';
    public $timestamps = true;
    protected $fillable = array('day_id','wmeal_id');

}
