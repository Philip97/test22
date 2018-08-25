<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\{Input, Storage};
use App\{Picture, Flooring, Countertop};

class Order extends Model
{
    protected $fillable = [
        'user_id',
        'bedrooms',
        'bathrooms',
        'zip',
        'firstName',
        'lastName',
        'streetAddress',
        'apt',
        'city',
        'homeSquare',
        'mobPhon',
        'frequency',
        'date',
        'source',
        'pet',
        'adult',
        'children',
        'dirty',
        'chek',
        'steel',
        'stove',
        'door',
        'mildew',
        'attention',
        'more'
    ];

    public $timestamps = false;

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function pictures()
    {
        return $this->hasMany('App\Picture');
    }

    public function extras()
    {
        return $this->hasMany('App\Extra');
    }

    public function floorings()
    {
        return $this->hasMany('App\Flooring');
    }

    public function countertops()
    {
        return $this->hasMany('App\Flooring');
    }

    public static function getFromSession()
    {
        return (
            Order::find(session('order_id'))
        );
    }

    public function updateHome($request, Order $order)
    {
        $order->fill(
             $request->all()
        );
        $order->save();
        if (Input::hasFile('logo')) {
            $order = new Order;
            $order->uploadImg($request['logo']);
        }
    }

    public function uploadImg($request)
    {
        $file = Input::file('logo');
        $path = Storage::url(Storage::put('/', $request));
        $picture = new Picture;
        $how_many_aploads = $picture->howManyApload($path);
        return $path;
    }

    public function updateMaterials($request, Order $order)  //del Order
    {
        $order->fill(
            $request->all()
        );
        $order->save();
        $flooring = new Flooring;
        $request['flooring'] = array_flip($request['flooring']);
        $flooring->Hardwood = (isset($request['flooring']['Hardwood']) ? 1 : 0);
        $flooring->Cork = (isset($request['flooring']['Cork']) ? 1 : 0);
        $flooring->Vinyl = (isset($request['flooring']['Vinyl']) ? 1 : 0);
        $flooring->Concrete = (isset($request['flooring']['Concrete']) ? 1 : 0);
        $flooring->Carpet = (isset($request['flooring']['Carpet']) ? 1 : 0);
        $flooring->natural_stone = (isset($request['flooring']['natural_stone']) ? 1 : 0);
        $flooring->Tile = (isset($request['flooring']['Tile']) ? 1 : 0);
        $flooring->Laminate = (isset($request['flooring']['Laminate']) ? 1 : 0);
        $order->floorings()->save($flooring);
        $countertop = new Countertop;
        $request['countertop'] = array_flip($request['countertop']);
        $countertop->Concrete = (isset($request['countertop']['Concrete']) ? 1 : 0);
        $countertop->Quartz = (isset($request['countertop']['Quartz']) ? 1 : 0);
        $countertop->Formica = (isset($request['countertop']['Formica']) ? 1 : 0);
        $countertop->Granite = (isset($request['countertop']['Granite']) ? 1 : 0);
        $countertop->Marble = (isset($request['countertop']['Marble']) ? 1 : 0);
        $countertop->Tile = (isset($request['countertop']['Tile']) ? 1 : 0);
        $countertop->Paper_Stone = (isset($request['countertop']['Paper_Stone']) ? 1 : 0);
        $countertop->Butcher_Block = (isset($request['countertop']['Butcher_Block']) ? 1 : 0);
        $order->countertops()->save($countertop);
        return true;
    }

    public function updateFrequency($frequency, Order $order)
    {
         $order->frequency = $frequency;
         $order->save();
    }

     public function saveExtras($request, Order $order)
    {
            $extras = new Extra;
        if ($request !== 'no_data') {
            // dd($request);
            $request['extras'] = array_flip($request);
            $data = $extras::updateOrCreate(
                ['id' => $order->id],
                [
                    'order_id' => $order->id,
                    'inside_fridge' => (isset($request['extras']['inside_fridge']) ? 1 : 0),
                    'inside_oven' => (isset($request['extras']['inside_oven']) ? 1 : 0),
                    'garage_swept' => (isset($request['extras']['garage_swept']) ? 1 : 0),
                    'inside_cabinets' => (isset($request['extras']['inside_cabinets']) ? 1 : 0),
                    'laundry_wash_s_dry' => (isset($request['extras']['laundry_wash_s_dry']) ? 1 : 0),
                    'bed_sheet_change' => (isset($request['extras']['bed_sheet_change']) ? 1 : 0),
                    'blinds_cleaning' => (isset($request['extras']['blinds_cleaning']) ? 1 : 0)
                ]
            );
             isset($request['extras']['inside_fridge']) ? $request['extras']['inside_fridge'] = 1 : false;
        } else {
            $del = $extras::find($order->id);
            if ( $del) $del->delete();
        }
        return $request['extras'] ?? null;
    }

}
