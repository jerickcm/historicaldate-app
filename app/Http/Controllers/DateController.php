<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Historicaldate;

class DateController extends Controller
{
     
    public function check()
    {
		$month = date('m');
    	$getmonth = Historicaldate::whereMonth('date', '=', $month)
              ->get();
        return $getmonth;
    }

}
