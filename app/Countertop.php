<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Countertop extends Model
{
    protected $fillable = [
        'order_id',
        'Concrete',
        'Quartz',
        'Formica',
        'Granite',
        'Marble',
        'Tile',
        'Paper_Stone',
        'Butcher_Block'
    ];

    public $timestamps = false;

    public function order()
    {
        return $this->belongsTo('App\Order');
    }
}