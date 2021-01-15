<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Validator;
use App\Models\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Brand;
use DataTables;
use Illuminate\Filesystem\Filesystem;

class BrandController extends Controller
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
        if ($request->ajax()) {

                //  dd(11);
            $data = Brand::latest()->get();
            return DataTables::of($data)
              ->addIndexColumn()
              ->addColumn('action', function ($row) {
      
                return view('admin.pages.components.crudPannelButtons')->with(['data' => $row, 'model' => 'brand']);
              })
              ->editColumn('logo', function ($row) {
                return  view('admin.pages.components.listImage')->with(['data' => $row, 'model' => 'brand']);
              })
      
              ->editColumn('created_at', function ($vendor) {
                return $vendor->created_at ? with(new Carbon($vendor->created_at))->format('d-m-Y') : '';
              })
              ->editColumn('updated_at', function ($vendor) {
                return $vendor->updated_at ? with(new Carbon($vendor->updated_at))->format('d-m-Y') : '';;
              })
              ->escapeColumns([])
              ->rawColumns(['action'])
              ->make(true);
          }
          $breadcrumbs = [
            ['link' => "/admin", 'name' => "Dashboard"],
            ['link' => route('brand.index'), 'name' => "Brand"],
            ['name' => "Brands list"]
          ];
          return view('admin.pages.brand.index', compact('breadcrumbs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $breadcrumbs = [
            ['link' => "/admin", 'name' => "Dashboard"],
            ['link' => route('brand.index'), 'name' => "Brand"],
            ['name' => "Brand"]
          ];
          return view('admin.pages.brand.create-form', ['breadcrumbs' => $breadcrumbs]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      
      //check if file eixist
      if ($request->hasFile('logo')) {
         
        //  Let's do everything here
        if ($request->file('logo')->isValid()) {
          
            // validation rules
            $validator = Validator::make($request->all(), [
              'brand_type_id' => 'required',
              'name' => 'required|string|max:255', 'name' => 'string|max:40',
              'description' => 'required',
              'logo' => 'mimes:jpeg,png|max:1014',
            ]);

            if ($validator->fails()) {
              return redirect()->back()
                ->withErrors($validator)
                ->withInput();
            } 
            // if validation have no errores
            else {
            
              //first insert data
              $brand = Brand::insertGetId([
                 'brand_type_id' => $request['brand_type_id'],
                 'name' => $request['name'],
                 'description' => $request['description'],
              ]);
               //then update data with image
              $logo =  "brand_".$brand.".".$request->logo->extension();
              $request->logo->move(public_path('uploads/brand_image'), $logo);
              //update  
              $brand = Brand::findorfail($brand);
              $brand->brand_type_id = request('brand_type_id');
              $brand->name = request('name');
              $brand->description = request('description');
              $brand->logo = $logo;
              $brand->save();
             
              return redirect()->back()->with('success', 'Brand created successfully');
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
      $brand = Brand::findorfail($id);
      //dd($cities);
      $breadcrumbs = [
        ['link' => "/", 'name' => "Dashboard"],
        ['link' => route('brand.index'), 'name' => "Brand"],
        ['name' => "Edit"]
      ];
      return view('admin.pages.brand.update-form', compact('breadcrumbs', 'brand'));
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
     
        $brand = Brand::findorfail($id);
        //validation rules
        $validator = Validator::make($request->all(), [
          'brand_type_id' => 'required',
          'name' => 'required|string|max:255', 'name' => 'string|max:40',
          'description' => 'required',
          'logo' => 'mimes:jpeg,png|max:1014',
        ]);

        if ($validator->fails()) {
          return redirect()->back()
            ->withErrors($validator)
            ->withInput();
        } 
        // if validation have no errores
        else {
          //if reuest has image
          if($request->hasFile('logo')) {
            //delete previous image
              $image_path = public_path('uploads/brand_image/').$brand->logo;
              unlink($image_path);
              $logo =  "brand_".$brand->id.".".$request->logo->extension();
              $request->logo->move(public_path('uploads/brand_image'), $logo);
              $brand->brand_type_id = request('brand_type_id');
              $brand->name = request('name');
              $brand->description = request('description');
              $brand->logo = $logo;
              $brand->save();

              return redirect()->back()->with('success', 'Brand Updated successfully');
          }else{
              $brand->brand_type_id = request('brand_type_id');
              $brand->name = request('name');
              $brand->description = request('description');
              $brand->save();

              return redirect()->back()->with('success', 'Brand Updated successfully');  
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
       //delete previous image
       $brand = Brand::findorfail($id);
       $image_path = public_path('uploads/brand_image/').$brand->logo;
       unlink($image_path);
      Brand::find($id)->delete();
      return back()->with('success', 'Brand deleted successfully');
    }
}
