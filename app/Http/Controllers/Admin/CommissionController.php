<?php

namespace App\Http\Controllers\Admin;

use App\Commission;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;
use App\Http\Controllers\Controller;
use Commissions;
use Illuminate\Http\Request;
use DataTables;
use Illuminate\Filesystem\Filesystem;

class CommissionController extends Controller
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
            $data = Commission::orderBy('id','desc')->get();
            return DataTables::of($data)
              ->addIndexColumn()
              ->addColumn('action', function ($row) {
      
                return view('admin.pages.components.crudPannelButtons')->with(['data' => $row, 'model' => 'commission']);
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
            ['link' => route('commission.index'), 'name' => "Commission"],
            ['name' => "Commission list"]
          ];
          return view('admin.pages.commission.index', compact('breadcrumbs'));
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
            ['link' => route('commission.index'), 'name' => "Commission"],
            ['name' => "Commission"]
          ];
          return view('admin.pages.commission.create-form', [
            'breadcrumbs' => $breadcrumbs
            // 'Category' => $Category
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
        
          
            // validation rules
            $validator = Validator::make($request->all(), [
              'status' => 'required',
              'percentage' => 'required',
            ]);

            if ($validator->fails()) {
              return redirect()->back()
                ->withErrors($validator)
                ->withInput();
            } 
            // if validation have no errores
            else {
            
              //insert data
              $commission = Commission::insert([
                 'status' => $request['status'],
                 'percentage' => $request['percentage'],
              ]);
         
             
              return redirect()->back()->with('success', 'Submitted successfully');
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
      $commission = Commission::findorfail($id);
      //dd($cities);
      $breadcrumbs = [
        ['link' => "/", 'name' => "Dashboard"],
        ['link' => route('commission.index'), 'name' => "Commission"],
        ['name' => "Edit"]
      ];
      return view('admin.pages.commission.update-form', compact('breadcrumbs', 'commission'));
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
       
        $commission = Commission::findorfail($id);
        //validation rules
        $validator = Validator::make($request->all(), [
          'status' => 'required',
          'percentage' => 'required',
        ]);

        if ($validator->fails()) {
          return redirect()->back()
            ->withErrors($validator)
            ->withInput();
        } 
        // if validation have no errores
        else {
          
          
              $commission->status = request('status');
              $commission->percentage = request('percentage');
              // dd( $commission);
              $commission->save();

              return redirect()->back()->with('success', 'commission Updated successfully');  
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
       $commission = Commission::findorfail($id);
     
       Commission::find($id)->delete();
      return back()->with('success', 'Commission deleted successfully');
    }
    
}
