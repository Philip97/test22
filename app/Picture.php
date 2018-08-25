<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\DB;
use App\Storage;

class Picture extends Model
{
	 protected $fillable = [
        'picture1',
        'picture2',
        'picture3',
        'picture4',
        'picture5',
        'picture6',
        'picture7',
        'picture8',
    ];

    public function order()
    {
        return $this->belongsTo('App\Order');
    }

    public function howManyApload($path){
		$order_id = session('order_id');
		$aploads = \DB::table('pictures')->where('order_id', 'like', $order_id)->get() ;
		$picture_count = count($aploads);
		if($picture_count == 0) {                     //first picture
				$res = \DB::table('pictures')->insert(
			   	 [ 'order_id' => $order_id, 'picture1' => $path]
    		);
    		return $path;
		} elseif ($picture_count < 8){                //Have cell for saving
			 $pict1 =  $picture_count + 1;
			 $pict = 'picture' . $pict1;
             // dd('picture' . $pict1);
             $res = \DB::table('pictures')->insert(
                 [ 'order_id' => $order_id,  $pict => $path]
             );
            return $path;
		}	else {                                      //delete 9th hoto
            $path_exp = explode('/', $path);
			$dell = \Storage::delete($path_exp[5]);
            return false;
		}

    }
}
