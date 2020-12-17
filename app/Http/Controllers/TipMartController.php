<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\HomeSection;
use App\DataSection;
use App\HomeLayout;

class TipMartController extends Controller
{
    //

    public function shopAtTipIndex(Request $req){

        //dd($req);
        $SectionData = array();
        $SideMenuCategories = Category::with('childCategory')->select('id','name')
            ->where('category_type_id',1)
            ->where('category_id',0)
            ->where('active',1)
            ->limit(9)->get();
        //dd($SideMenuCategory);

        $Sections = HomeSection::select('id','name','layout_id')->where('active',1)->get();
        //dd($Sections);
        foreach($Sections as $Section){
            if($Section->layout_id == 1){
                $DataSection = DataSection::select('data_sections.id','products.id as pid','products.name as pname','products.url_name','products.sale_price','products.main_image','home_sections.id','home_sections.name')
                    ->join('products','products.id','=','data_sections.data_id')
                    ->join('home_sections','home_sections.id','=','data_sections.section_id')
                    ->where('data_sections.section_id',$Section->id)
                    ->where('home_sections.active',1)
                    ->get();
                //dd($DataSection);

            }
            else if($Section->layout_id == 2){

                $DataSection = DataSection::select('data_sections.id','categories.id','categories.name','categories.url_name','categories.sale_price','home_sections.id','home_sections.name')
                    ->join('categories','categories.id','=','data_sections.data_id')
                    ->join('home_sections','home_sections.id','=','data_sections.data_id')
                    ->where('data_sections.section_id',$Section->id)
                    ->where('home_sections.active',1)
                    ->get();
            }
            else{

                $DataSection = DataSection::select('data_sections.id','brands.id','brands.name','home_sections.id','home_sections.name')
                    ->join('brands','brands.id','=','data_sections.data_id')
                    ->join('home_sections','home_sections.id','=','data_sections.data_id')
                    ->where('data_sections.section_id',$Section->id)
                    ->where('home_sections.active',1)
                    ->get();
            }
            //dd();
            array_push($SectionData,$DataSection);
        }
        // dd($SectionData);
        return view('user.shopattip.homepage',
            [
                'SideMenuCategories' => $SideMenuCategories,
                'SectionData' => $SectionData,
                'Sections' => $Sections
            ]);
    }

    //load shop view
    public function Shop(Request $request)
    {
//	     dd($request);
        return view('user.shopattip.shop');
    }

    public function tipMartIndex(Request $req){

        return view('user.tipmart.tipmart');
    }
}
