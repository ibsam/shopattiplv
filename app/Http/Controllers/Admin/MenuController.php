<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;
use App\Menu;
use DataTables;
use Illuminate\Filesystem\Filesystem;

class MenuController extends Controller
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
        $data = Menu::latest()->get();
        return DataTables::of($data)
          ->addIndexColumn()
          ->addColumn('action', function ($row) {
  
            return view('admin.pages.components.crudPannelButtons')->with(['data' => $row, 'model' => 'menu']);
          })
          ->addColumn('type', function ($row) {
  
            return ($row->menu_type_id == 1)? 'General' : 'Grocery';
          })
          ->editColumn('active', function ($row) {
  
            return view('admin.pages.components.switch')->with(['data' => $row]);
          })

        //   ->escapeColumns(['created_at','updated_at'])
          ->rawColumns(['action'])
          ->make(true);
        }
      $breadcrumbs = [
        ['link' => "/admin", 'name' => "Dashboard"],
        ['link' => route('menu.index'), 'name' => "Menu"],
        ['name' => "Menu list"]
      ];
      return view('admin.pages.menu.index', compact('breadcrumbs'));

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
            ['link' => route('menu.index'), 'name' => "Menu"],
            ['name' => "Menu list"]
          ];
        return view('admin.pages.menu.create-form', compact('breadcrumbs'));
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
        $validator = Validator::make($request->all(), [
            'menu_type_id' => 'required',
            'title' => 'required|string|max:255', 'name' => 'string|max:40',
            'destination_url' => 'required',
            
          ]);
         
          if ($validator->fails()) {
              ///dd('aaaa');
              //dd($validator);
            return redirect()->back()
              ->withErrors($validator);
              
          } 
          // if validation have no errores
          else {
          
            //first insert data
            
            $menu = Menu::insertGetId([
               'menu_type_id' => $request['menu_type_id'],
               'name' => $request['title'],
               'destination_url' => $request['destination_url'],
               'active' => 1,
            ]);

           
            return redirect()->back()->with('success', 'Menu created successfully');
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
        $Menu = Menu::findorfail($id);
        $breadcrumbs = [
            ['link' => "/admin", 'name' => "Dashboard"],
            ['link' => route('menu.index'), 'name' => "Menu"],
            ['name' => "Menu list"]
        ];

        return view('admin.pages.menu.update-form',[
            'breadcrumbs' => $breadcrumbs,
            'menu' => $Menu
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
        if($request->active){
            $active = 1;
          }
        else{
            $active = 0;
        }
        $validator = Validator::make($request->all(), [
            'menu_type_id' => 'required',
            'title' => 'required|string|max:255', 'name' => 'string|max:40',
            'destination_url' => 'required',
            //'banner' => 'mimes:jpeg,png|max:1014',
            
          ]);
         //dd($request->input());
          if ($validator->fails()) {
              
            return redirect()->back()
              ->withErrors($validator);
              
          } 
          else{
            $Menu = Menu::findorfail($id);
            $Menu->menu_type_id = $request->menu_type_id;
            $Menu->name = $request->title;
            $Menu->destination_url = $request->destination_url;
            $Menu->active = $active;
            $Menu->update();
        
          }
          
           return redirect()->back()->with('success', 'Menu Updated successfully');
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
        Menu::find($id)->delete();
        return back()->with('success', 'Menu deleted successfully');
    }
}
