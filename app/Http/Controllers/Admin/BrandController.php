<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Brand;
use DataTables;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
            ['link' => "/", 'name' => "Dashboard"],
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
            ['link' => "/", 'name' => "Dashboard"],
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
