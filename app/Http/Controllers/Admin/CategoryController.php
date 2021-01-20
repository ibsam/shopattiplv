<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;
use App\Category;
use DataTables;
use Illuminate\Filesystem\Filesystem;

class CategoryController extends Controller
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

        $data = Category::latest()->get();
        return DataTables::of($data)
          ->addIndexColumn()
          ->addColumn('type', function ($data) {
  
            return $data->category_type_id == 1 ? 'General'  : 'Grocery';
          })
        
          ->addColumn('action', function ($row) {
  
            return view('admin.pages.components.crudPannelButtons')->with(['data' => $row, 'model' => 'category']);
          })
          ->editColumn('logo', function ($row) {
            return  view('admin.pages.components.listImage')->with(['data' => $row, 'model' => 'category']);
          })
          ->editColumn('active', function ($row) {
  
            return view('admin.pages.components.switch')->with(['data' => $row]);
          })
          ->editColumn('menubit', function ($row) {
  
            return view('admin.pages.components.menu-switch')->with(['data' => $row]);
          })
          ->escapeColumns([])
          ->rawColumns(['action'])
          ->make(true);
      }
      $breadcrumbs = [
        ['link' => "/admin", 'name' => "Dashboard"],
        ['link' => route('category.index'), 'name' => "category"],
        ['name' => "Category list"]
      ];
      return view('admin.pages.category.index', compact('breadcrumbs'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $Categories = Category::select('id','name','category_level','level_name')->where('active',1)->get();
        $breadcrumbs = [
            ['link' => "/admin", 'name' => "Dashboard"],
            ['link' => route('category.index'), 'name' => "category"],
            ['name' => "Category"]
          ];
          return view('admin.pages.category.create-form', [
            'breadcrumbs' => $breadcrumbs,
            'Categories' => $Categories
            ]);
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
        $commision = ($request->commision)? $request->commision : 0;
        $menubit = ($request->menubit)? 1:0;
        if ($request->hasFile('logo')) {
         
            //  Let's do everything here

            if ($request->file('logo')->isValid()) {
              
                // validation rules
                $parent_cat = explode(',',$request->category_id);
                $category_id = $parent_cat[0];
                $category_level = $parent_cat[1];
                $level_name = $parent_cat[2];
                $validator = Validator::make($request->all(), [
                  'category_type_id' => 'required',
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
                  $category = Category::insertGetId([
                    'category_id' => $category_id,
                    'category_level' => $category_level,
                    'level_name' => $level_name,
                    'category_type_id' => $request['category_type_id'],
                    'name' => $request['name'],
                    'description' => $request['description'],
                    'menubit' => $menubit,
                    'commision' => $commision,
                    'active' => 1
                  ]);
                   //then update data with image
                  $logo =  "category_".$category.".".$request->logo->extension();
                  $request->logo->move(public_path('uploads/category_image'), $logo);
                  //update  
                  $category = Category::findorfail($category);
                  $category->banner = $logo;
                  $category->save();
                 
                  return redirect()->back()->with('success', 'category created successfully');
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
        $category = Category::findorfail($id);
        $Categories = Category::select('id','name','category_level','level_name')->where('active',1)->get();
        //dd($category);
        $breadcrumbs = [
          ['link' => "/", 'name' => "Dashboard"],
          ['link' => route('category.index'), 'name' => "category"],
          ['name' => "Edit"]
        ];
        return view('admin.pages.category.update-form', compact('breadcrumbs', 'category','Categories'));
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
        $commision = ($request->commision)? $request->commision : 0;
        $menubit = ($request->menubit)? 1:0;
        $active = ($request->active)? 1:0;
        $category = Category::findorfail($id);
        //validation rules
        $parent_cat = explode(',',$request->category_id);
        $category_id = $parent_cat[0];
        $category_level = $parent_cat[1];
        $level_name = $parent_cat[2];
        
        $validator = Validator::make($request->all(), [
          'category_type_id' => 'required',
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
              $image_path = public_path('uploads/category_image/').$category->logo;
              unlink($image_path);
              $logo =  "category_".$category->id.".".$request->logo->extension();
              $request->logo->move(public_path('uploads/category_image'), $logo);
              $category->category_type_id = request('category_type_id');
              $category->name = request('name');
              $category->category_id = $category_id;
              $category->category_level = $category_level;
              $category->level_name = $level_name;
              $category->description = request('description');
              $category->logo = $logo;
              $category->commision = $commision;
              $category->menubit = $menubit;
              $category->active = $active;
              $category->save();

              return redirect()->back()->with('success', 'Category Updated successfully');
          }else{
              
              $category->category_type_id = request('category_type_id');
              $category->name = request('name');
              $category->description = request('description');
              $category->category_id = $category_id;
              $category->category_level = $category_level;
              $category->level_name = $level_name;
              $category->commision = $commision;
              $category->menubit = $menubit;
              $category->active = $active;
              $category->save();

              return redirect()->back()->with('success', 'Category Updated successfully');  
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
        $category = Category::findorfail($id);
        //dd($category->banner);
        $image_path = public_path('uploads/category_image/').$category->banner;
        unlink($image_path);
      //   Category::find($id)->delete();
      //  return back()->with('success', 'Brand deleted successfully');
    }
}
