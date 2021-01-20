<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;

use Illuminate\Support\Facades\Validator;
use App\Models\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;
use App\Brand;
use DataTables;
use Illuminate\Filesystem\Filesystem;

class ProductController extends Controller
{

    public function __construct(){
        //dd('xxxxxx');
        $this->middleware('auth:web');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
      $pageConfigs = ['showMenu' => true];
        if ($request->ajax()) {

            //  dd(11);
        $data = Product::orderBy('id','desc')->get();
        return DataTables::of($data)
          ->addIndexColumn()
          ->addColumn('action', function ($row) {
  
            return view('admin.pages.components.crudPannelButtons')->with(['data' => $row, 'model' => 'product']);
          })
          ->editColumn('logo', function ($row) {
            return  view('admin.pages.components.listImage')->with(['data' => $row, 'model' => 'product']);
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
        ['link' => route('product.index'), 'name' => "Product"],
        ['name' => "Products list"]
      ];
      return view('admin.pages.product.index',  [ 'breadcrumbs' => $breadcrumbs,'pageConfigs'=>$pageConfigs]);
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
            ['link' => route('product.index'), 'name' => "Product"],
            ['name' => "Product"]
          ];
          return view('admin.pages.product.create-form', ['breadcrumbs' => $breadcrumbs]);
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
        //dd($request);
        if($request->hasFile('logo') && $request->hasFile('thumbnail_images')){
          if($request->file('logo')->isValid() && $request->file('thumbnail_images')->isValid()){

            $validator = Validator::make([
              'name' => 'required|max:255',
              'description' => 'required|max:255',
              'logo' => 'mimes:jpeg,png|max:1014',
            ]);

            if($validator->fails()){
              return back()->withErrors($validator);
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
        $Product = Product::findorfail($id);
        $breadcrumbs = [
          ['link' => "/admin", 'name' => "Dashboard"],
          ['link' => route('product.index'), 'name' => "Product"],
          ['name' => "Product"]
        ];
        return view('admin.pages.product.create-form', [
          'breadcrumbs' => $breadcrumbs,
          'Product' =>  $Product  
        ]);
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
    }
}
