<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Vendor;
use App\MenuDhaba;
use App\FoodCateg;
use View;
class MainController extends Controller
{
    public function viewMenu(){
    	$data = Vendor::all();    	
    	return View::make('site.menuSelect')->with('data', $data);
    }

    public function viewPlace($name){
    	$categ = FoodCateg::all();
        $menu['categ'] = $categ;
        for($i=0;$i< sizeof($categ);$i++){
                                $p = $categ[$i];
                                $temp = MenuDhaba::where('place',$name)
                                                ->where('categ',$categ[$i])
                                                ->get();                                
                                $menu['item']["$p"] = $temp;
        }
        dd($menu);
  //  	 	$specials = MenuDhaba::where('place',$name)
  //   						->where('categ','specials')
  //   						->get();
  //   	$drinks = MenuDhaba::where('place',$name)
  //   						->where('categ','drinks')
  //   						->get();
		// $mainCourse = MenuDhaba::where('place',$name)
  //   						->where('categ','mainCourse')
  //   						->get();    						
  //   	$snacks = MenuDhaba::where('place',$name)
  //   						->where('categ','snacks')
  //   						->get();
  //       $categ = FoodCateg::all();
  //   	$menu['placeName'] = $name;    	
  //   	$menu['item']['specials'] = $specials;
  //   	$menu['item']['drinks'] = $drinks;
  //   	$menu['item']['mainCourse'] = $mainCourse;
  //   	$menu['item']['snacks'] = $snacks;
  //       $menu['categ'] = $categ;
        // dd($menu);
    	return View::make('site.venues.index')->with('menu',$menu);
    }
}
