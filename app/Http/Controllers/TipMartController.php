<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\HomeSection;
use App\DataSection;
use App\HomeLayout;

class TipMartController extends Controller
{

    //landing view
    public function tipMartIndex(Request $req){

        return view('user.tipmart.tipmart');
    }

    //load shop view
    public function Shop(Request $request)
    {

        return view('user.tipmart.shop');
    }
}
