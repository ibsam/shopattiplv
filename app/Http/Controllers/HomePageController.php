<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
class HomePageController extends Controller
{
    //

    public function shopAtTipIndex(Request $req){

    	//dd($req);

    	$SideMenuCategories = Category::with('childCategory')->select('id','name')
    						->where('category_type_id',1)
    						->where('category_id',0)
    						->where('active',1)
    						->limit(9)->get();
    	//dd($SideMenuCategory);

    	return view('user.shopattip.homepage',['SideMenuCategories' => $SideMenuCategories]);
    }

    public function tipMartIndex(Request $req){

    	return view('user.tipmart..tipmart');
    }
}
