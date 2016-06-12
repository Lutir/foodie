<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Vendor;
use App\MenuDhaba;
use View;
class MainController extends Controller
{
    public function viewMenu(){
    	$data = Vendor::all();    	
    	return View::make('site.menuSelect')->with('data', $data);
    }

    public function viewPlace($name){
    	
    	$menu = MenuDhaba::where('place',$name);
    			
    	dd($menu);


    	return View::make('site.venues.index')->with('data',$name);
    }
}
