<?php

namespace App;

use App\Order;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Config;;

class Calculate extends Model
{
    private $_order;
    private $_constants;

    function __construct(Order $order)
    {
        $this->_constants = Config::get("constants");
        $this->_order = $order;
    }

    public static function init(Order $order)
    {
        return new Calculate($order);
    }

    public function getTotalPtice($extras =  null)
    {
        if ($extras) {
            foreach ($extras as $key => $value) {
            
            }
        }
        $bedrooms = $this->_constants['bedrooms'][$this->_order['bedrooms']];
        $bathrooms = $this->_constants['bathrooms'][$this->_order['bathrooms']];
        $frequency = $this->_constants['frequency'][$this->_order['frequency']];
        $pet = $this->_constants['pet'][$this->_order['pet']];
        $adult = $this->_constants['adult'][$this->_order['adult']];
        $children = $this->_constants['children'][$this->_order['children']];
        $chek = $this->_constants['chek'][$this->_order['chek']];
        $steel = $this->_constants['steel'][$this->_order['steel']];
        $stove = $this->_constants['stove'][$this->_order['stove']];
        $door = $this->_constants['door'][$this->_order['door']];
        $mildew = $this->_constants['mildew'][$this->_order['mildew']];

        // $extra1 = $this->_constants['extras'][$extras['inside_fridge']];
        
        $homeSquare1 = $this->_constants['homeSquare'][1];
        $homeSquare2 = $this->_constants['homeSquare'][2];
        $hom_sq_price = $this->_order['homeSquare'] / $homeSquare1 * $homeSquare2;
        $dirty1 = $this->_constants['dirty'][1];
        $dirty2 = $this->_constants['dirty'][2];
        $dirty_price = $this->_order['dirty'] / $dirty1 * $dirty2;

        $total = array_sum([
             $bedrooms,
             $bathrooms,
             $frequency,
             $pet,
             $adult,
             $children,
             $chek,
             $steel,
             $stove,
             $door,
             $mildew,
             $hom_sq_price,
             $dirty_price
         ]);
        $weekly = $total - $this->_constants['frequency']['weekly'];
        $biweekly = $total - $this->_constants['frequency']['biweekly'];;
        $monthly = $total - $this->_constants['frequency']['monthly'];;
        $total = [$total, $weekly, $biweekly, $monthly];
        return ($total);
    }
}


