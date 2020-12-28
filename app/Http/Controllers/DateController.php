<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Historicaldate;

class DateController extends Controller
{
    
    /* Method 1 to get*/
    public function check()
    {
		$month = date('m');
    	$getmonth = Historicaldate::whereMonth('date', '=', $month)
              ->get();
        return $getmonth;
    }

}
