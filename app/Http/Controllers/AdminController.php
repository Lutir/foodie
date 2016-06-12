<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Vendor;
use App\Hostel;
use App\MenuDhaba;
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

   public function addMenuItem(Request $request)
   {
      $bool = MenuDhaba::where('name',$request->input('name'))
                        ->first();
      if($request->input('addorremove')=='add'){
      if(!$bool){
         $item = new MenuDhaba();
         $item->name = $request->input('name');
         $item->type = $request->input('type');
         $item->categ = $request->input('categ');
         $item->cost = $request->input('cost');
         $item->place = $request->input('venue');
         $item->save();
         return json_encode('add1');
         }
      return json_encode('add0');
      }
      else if($request->input('addorremove')=='remove'){
         if($bool){
            MenuDhaba::where('name',$request->input('name'))
                           ->where('place',$request->input('venue'))
                           ->delete();
            return json_encode('remove1');
         }
         json_encode('remove0');
      }
   }

}
