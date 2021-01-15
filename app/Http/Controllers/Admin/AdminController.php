<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DataTables;
use App\Product;

class AdminController extends Controller
{

    private $directory = 'admin';

        // home

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function home(){
        $breadcrumbs = [
            ['link'=>"home",'name'=>"Home"], ['name'=>"Index"]
        ];
        return view($this->directory.'/content/home', ['breadcrumbs' => $breadcrumbs]);
    }

    public function getTest(Request $request)
    {
        // dd("here");
        if ($request->ajax()) {
            $data = Product::latest()->get();
            return Datatables::of($data)
            ->addIndexColumn()
            ->addColumn('action', function($row){
                $actionBtn = '<a href="javascript:void(0)" class="edit btn btn-success btn-sm">Edit</a> <a href="javascript:void(0)" class="delete btn btn-danger btn-sm">Delete</a>';
                return $actionBtn;
            })
            ->rawColumns(['action'])
            ->make(true);
        }
    }

    public function test(Request $request)
    {
 
        $breadcrumbs = [
            ['link'=>"/",'name'=>"Home"],['link'=>"/",'name'=>"Page"], ['name'=>"Test Page"]
        ];
        
        return view('admin/pages/test', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }

    // Layout collapsed menu
    // public function collapsed_menu(){
    //     $pageConfigs = ['sidebarCollapsed' => true];
    //     $breadcrumbs = [
    //         ['link'=>"home",'name'=>"Home"],['link'=>"javascript:void(0)",'name'=>"Layouts"], ['name'=>"Collapsed menu"]
    //     ];
    //     return view($this->directory.'/content/layout-collapsed-menu', ['breadcrumbs' => $breadcrumbs, 'pageConfigs' => $pageConfigs]);
    // }

    // // layout boxed
    // public function layout_boxed(){
    //     $pageConfigs = ['layoutWidth' => 'boxed'];

    //     $breadcrumbs = [
    //         ['link'=>"home",'name'=>"Home"],['name'=>"Layouts"], ['name'=>"Layout Boxed"]
    //     ];
    //     return view($this->directory.'/content/layout-boxed', [ 'pageConfigs' => $pageConfigs,'breadcrumbs' => $breadcrumbs]);
    // }

    // // without menu
    // public function without_menu(){
    //     $pageConfigs = ['showMenu' => false];
    //     $breadcrumbs = [
    //         ['link'=>"home",'name'=>"Home"],['link'=>"javascript:void(0)",'name'=>"Layouts"], ['name'=>"Layout without menu"]
    //     ];
    //     return view($this->directory.'/content/layout-without-menu', [ 'breadcrumbs' => $breadcrumbs,'pageConfigs'=>$pageConfigs]);
    // }

    // // Empty Layout
    // public function layout_empty()
    // {
    //     $breadcrumbs = [['link' => "/dashboard/analytics", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Layouts"], ['name' => "Layout Empty"]];
    //     return view($this->directory.'/content/layout-empty', ['breadcrumbs' => $breadcrumbs]);
    // }
    // // Blank Layout
    // public function layout_blank()
    // {
    //     $pageConfigs = ['blankPage' => true];
    //     $breadcrumbs = [['link' => "/dashboard/analytics", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Layouts"], ['name' => "Layout Blank"]];
    //     return view($this->directory.'/content/layout-blank', ['pageConfigs' => $pageConfigs, 'breadcrumbs' => $breadcrumbs]);
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
