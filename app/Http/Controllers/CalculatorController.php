<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function calculator(Request $request)
    {
        $description = $request->description;
        $listPrice = $request->listprice;
        $percent = $request->percent;
        $discountAmount = $listPrice * $percent * 0.01;
        $discountPrice = $listPrice-$discountAmount;
        return view('discountOutput',compact(['discountAmount','discountPrice','description','listPrice','percent']));
    }
}
