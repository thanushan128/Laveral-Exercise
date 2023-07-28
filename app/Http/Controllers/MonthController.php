<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MonthController extends Controller
{
    public function __construct()
    {
        $this->middleware('month');
    }

    public function numToMonth(Request $request){
        $num= $request->num;
        $user = $request->input('user');
        if($num==1){
            return "<h1>January</h1>". $user;
        } elseif ($num == 2) {
            return "<h1>February</h1>". $user;
        } elseif ($num == 3) {
            return "<h1>March</h1>". $user;
        }else{
            return "<h1>January</h1>" . $user;
        }
    }
}
