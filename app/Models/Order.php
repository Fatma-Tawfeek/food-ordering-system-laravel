<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

    protected $table = 'orders';
    public $timestamps = true;
    protected $fillable = array('name', 'phone', 'address', 'quantity', 'state', 'notes', 'meal_id', 'wmeal_id');

    public function meal()
    {
        return $this->belongsTo('App\Models\Meal');
    }

    public function wmeal()
    {
        return $this->belongsTo('App\Models\Wmeal');
    }

}
