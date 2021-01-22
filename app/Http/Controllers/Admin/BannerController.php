<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Facades\Validator;
use App\Slider;
use DataTables;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){
      //dd('xxxxxx');
      $this->middleware('auth:web');
    }
    public function index(Request $request)
    {
        //
        

        if ($request->ajax()) {

            //dd(11);
        $data = Slider::latest()->get();
        return DataTables::of($data)
          ->addIndexColumn()
          ->addColumn('action', function ($row) {
  
            return view('admin.pages.components.crudPannelButtons')->with(['data' => $row, 'model' => 'banner']);
          })
          ->addColumn('slider_type_id', function ($row) {
  
            return $row->category_type_id == 1 ? 'General'  : 'Grocery';
          })
          ->editColumn('active', function ($row) {
  
            return view('admin.pages.components.switch')->with(['data' => $row]);
          })
          ->editColumn('banner', function ($row) {
            return  view('admin.pages.components.bannerImage')->with(['data' => $row]);
          })
        //   ->escapeColumns(['created_at','updated_at'])
          ->rawColumns(['action'])
          ->make(true);
        }
      $breadcrumbs = [
        ['link' => "/admin", 'name' => "Dashboard"],
        ['link' => route('banner.index'), 'name' => "Banner"],
        ['name' => "Banner list"]
      ];
      return view('admin.pages.banner.index', compact('breadcrumbs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $breadcrumbs = [
            ['link' => "/admin", 'name' => "Dashboard"],
            ['link' => route('banner.index'), 'name' => "Banner"],
            ['name' => "Banner list"]
          ];
        return view('admin.pages.banner.create-form', compact('breadcrumbs'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
      if ($request->hasFile('banner')) {
         
            //  Let's do everything here
            if ($request->file('banner')->isValid()) {
              
                // validation rules
                $validator = Validator::make($request->all(), [
                  'slider_type_id' => 'required',
                  'title' => 'required|string|max:255', 'name' => 'string|max:40',
                  'slug' => 'required',
                  'destination_url' => 'required',
                  'banner' => 'mimes:jpeg,png|max:1014',
                  
                ]);
               
                if ($validator->fails()) {
                    ///dd('aaaa');
                    dd($validator);
                  return redirect()->back()
                    ->withErrors($validator);
                    
                } 
                // if validation have no errores
                else {
                
                  //first insert data
                  
                  $brand = Slider::insertGetId([
                     'slider_type_id' => $request['slider_type_id'],
                     'title' => $request['title'],
                     'slug' => $request['slug'],
                     'destination_url' => $request['destination_url'],
                     'active' => 1,
                  ]);
                   //then update data with image
                  $logo =  $request->slug . "." . $request->banner->extension();
                  $request->banner->move(public_path('uploads/slides_image'), $logo);

                 
                  return redirect()->back()->with('success', 'Banner created successfully');
                }
    
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $Slider = Slider::findorfail($id);
        $breadcrumbs = [
          ['link' => "/admin", 'name' => "Dashboard"],
          ['link' => route('banner.index'), 'name' => "Banner"],
          ['name' => "Banner list"]
        ];
        return view('admin.pages.banner.update-form', compact('breadcrumbs','Slider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $Slider = Slider::findorfail($id);
        if($request->active){
          $active = 1;
        }
        else{
          $active = 0;
        }
        if($request->hasFile('banner')){
          if ($request->file('banner')->isValid()) {
              
            // validation rules
            $validator = Validator::make($request->all(), [
              'slider_type_id' => 'required',
              'title' => 'required|string|max:255', 'name' => 'string|max:40',
              'slug' => 'required',
              'destination_url' => 'required',
              'banner' => 'mimes:jpeg,png|max:1014',
              
            ]);
           
            if ($validator->fails()) {
                ///dd('aaaa');
                dd($validator);
              return redirect()->back()
                ->withErrors($validator);
                
            } 
            else{

              $Slider->slider_type_id = $request->slider_type_id;
              $Slider->title = $request->title;
              $Slider->slug = $request->slug;
              $Slider->destination_url = $request->destination_url;
              $Slider->active = $request->active;
              $Slider->update();
              //then update data with image
             $logo =  $request->slug . "." . $request->banner->extension();
             $request->banner->move(public_path('uploads/slides_image'), $logo);

            
             return redirect()->back()->with('success', 'Banner created successfully');
            }

          }
        }
        else{
          $validator = Validator::make($request->all(), [
            'slider_type_id' => 'required',
            'title' => 'required|string|max:255', 'name' => 'string|max:40',
            'slug' => 'required',
            'destination_url' => 'required',
            //'banner' => 'mimes:jpeg,png|max:1014',
            
          ]);
         //dd($request->input());
          if ($validator->fails()) {
              
            return redirect()->back()
              ->withErrors($validator);
              
          } 
          else{

            $Slider->slider_type_id = $request->slider_type_id;
            $Slider->title = $request->title;
            $Slider->slug = $request->slug;
            $Slider->destination_url = $request->destination_url;
            $Slider->active = $active;
            $Slider->update();

          
           return redirect()->back()->with('success', 'Banner Updated successfully');
          }
        }

        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $Slider = Slider::findorfail($id);
        //$brand = Brand::findorfail($id);
        $image_path = public_path('uploads/slides_image/').$Slider->slug .".jpg" ;
        unlink($image_path);
        Slider::find($id)->delete();
        return back()->with('success', 'Banner deleted successfully');

    }
}
