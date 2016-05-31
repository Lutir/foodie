<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Hostel;
use Log;

class AdminController extends Controller
{
    public function addHostel(Request $request){

    	Log::info($request->input('hostelName'));
    	$name = new Hostel();
    	$name->hostelName = $request->input('hostelName');
    	$name->save();
		return json_encode(0);
    }

    public function addItem(Request $request){

    }

    public function viewMenu(Request $equest){
    	Log::info($request->input('hostelName'));
    	
    }
}
