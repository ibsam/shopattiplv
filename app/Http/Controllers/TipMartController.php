<?php

namespace App\Http\Controllers;

use App\Slider;
use Illuminate\Http\Request;
use App\Category;
use App\HomeSection;
use App\DataSection;
use App\HomeLayout;

class TipMartController extends Controller
{

    //landing view
    public function tipMartIndex(Request $req){

        $Slides = Slider::where('slider_type_id',2)->get();

        $Categories = Category::select('id','name','url_name')
            ->where('category_level',3)
            ->where('category_type_id',2)
            ->get();

        $SectionData = array();
        $Sections = HomeSection::select('id','name','layout_id')->where('active',1)->get();
//        dd( $Categories);
        foreach($Sections as $Section){
            if($Section->layout_id == 1){
                $DataSection = DataSection::select('data_sections.id','products.id as pid','products.name as pname','products.url_name','products.sale_price','products.main_image','home_sections.id','home_sections.name')
                    ->join('products','products.id','=','data_sections.data_id')
                    ->join('home_sections','home_sections.id','=','data_sections.section_id')
                    ->where('data_sections.section_id',$Section->id)
                    ->where('products.product_type_id',2)
                    ->where('home_sections.active',1)
                    ->get();
                //dd($DataSection);

            }
            else if($Section->layout_id == 2){

                $DataSection = DataSection::select('data_sections.id','categories.id','categories.name','categories.url_name',
                    'home_sections.id','home_sections.name')
                    ->join('categories','categories.id','=','data_sections.data_id')
                    ->join('home_sections','home_sections.id','=','data_sections.data_id')
                    ->where('data_sections.section_id',$Section->id)
                    ->where('categories.category_type_id',2)
                    ->where('home_sections.active',1)
                    ->get();
            }
            else{

                $DataSection = DataSection::select('data_sections.id','brands.id','brands.name','home_sections.id','home_sections.name')
                    ->join('brands','brands.id','=','data_sections.data_id')
                    ->join('home_sections','home_sections.id','=','data_sections.data_id')
                    ->where('data_sections.section_id',$Section->id)
                    ->where('brands.brand_type_id',2)
                    ->where('home_sections.active',1)
                    ->get();
            }
            //dd();
            array_push($SectionData,$DataSection);
        }
//        dd( $Sections);
//        dd( $SectionData[0][0]->data_sections);
//        echo "<pre>";
//        print_r($SectionData);
//        exit();
        return view('user.tipmart.tipmart',
            [
                'Categories' => $Categories,
                'SectionData' => $SectionData,
                'Sections' => $Sections,
                'Slides' => $Slides
            ]);
    }

    //load shop view
    public function Shop(Request $request)
    {
        return view('user.tipmart.shop');
    }
}
