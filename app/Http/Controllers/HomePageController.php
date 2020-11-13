<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomePageController extends Controller
{
    //

    public function shopAtTipIndex(Request $req){

    	//dd($req);
    	return view('user.shopattip.homepage');
    }

    public function tipMartIndex(Request $req){


    }
}
