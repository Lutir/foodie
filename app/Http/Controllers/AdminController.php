<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Vendor;
use App\Hostel;
use Log;


class AdminController extends Controller
{
   
   public function addName(Request $request)
   {
   		if($request->input('type')=='hostel'){
   			$bool = Hostel::where('hostelName',$request->input('name'))
   					->first();
   			if(!$bool){
   				$name = new Hostel();
   				$name->hostelName = $request->input('name');
				$name->save();
				return json_encode(1);
   			}
   			else{
   				return json_encode(0);
   			}
   		}
   		else if($request->input('type')=='vendor'){
   			$bool = Vendor::where('vendorName',$request->input('name'))
   					->first();
   			if(!$bool){
   				$name = new Vendor();
   				$name->vendorName = $request->input('name');
				$name->save();
				return json_encode(1);
   			}
   			else{
   				return json_encode(0);
   			}
   		}
   }

   public function removeName(Request $request)
   {
   		if($request->input('type')=='hostel'){
   			$bool = Hostel::where('hostelName',$request->input('name'))
   					->first();
   			if($bool){
   				Hostel::where('hostelName',$request->input('name'))
   					->delete();
   				return json_encode(1);
   			}
   			return json_encode(0);
   		}
   		else if($request->input('type')=='vendor'){
   			$bool = Vendor::where('vendorName',$request->input('name'))
   					->first();
   			if($bool){
   				Vendor::where('vendorName',$request->input('name'))
   					->delete();
   				return json_encode(1);
   			}
   			return json_encode(0);
   		}
   }

   public function viewAll(Request $request)
   {
   		if($request->input('type')=='hostel'){
   			$data = Hostel::all();
   			return json_encode($data);
   		}
   		else if($request->input('type')=='vendor'){
   			$data = Vendor::all();
   			return json_encode($data);
   		}
   }

}
