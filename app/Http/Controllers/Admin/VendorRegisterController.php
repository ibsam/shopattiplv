<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Vendor;
use DataTables;
use Illuminate\Support\Facades\Hash;
use App\User;
use Carbon\Carbon;

class VendorRegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){
        // dd('xxxxxx');
        $this->middleware('auth:web');
      }
      
    public function index(Request $request)
    {
        if ($request->ajax()) {

                //  dd(11);
            $data = Vendor::orderBy('id','desc')->get();
            return DataTables::of($data)
              ->addIndexColumn()
              ->addColumn('action', function ($row) {
      
                return view('admin.pages.components.crudPannelButtons')->with(['data' => $row, 'model' => 'vendor']);
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
            ['link' => route('vendor.index'), 'name' => "Vendor"],
            ['name' => "Vendor's list"]
          ];
          return view('admin.pages.vendor.index', compact('breadcrumbs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   
        protected function create()
        {
            $breadcrumbs = [
              ['link' => "/admin", 'name' => "Dashboard"],
              ['link' => route('vendor.index'), 'name' => "Vendor"],
              ['name' => "Vendor"]
            ];
            return view('admin.pages.vendor.create-form', [
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
        $vendor = Vendor::findorfail($id);
        // dd($vendor->user_id);
        $breadcrumbs = [
          ['link' => "/", 'name' => "Dashboard"],
          ['link' => route('vendor.index'), 'name' => "Vendor"],
          ['name' => "Edit"]
        ];
        return view('admin.pages.vendor.update-form', compact('breadcrumbs', 'vendor'));
      
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     * @return \App\User
     */
    public function update(Request $request, $id )
    {
      
        //
       // $user_id = auth()->user()->id;
       $user = User::findorfail($request->user_id);
        // dd($user);
        $userData['name']=$request->name;
        $userData['email']=$request->email;
        $userData['password']=Hash::make($request->password);

        $user->update($userData);

        
        
        if($request->status == "on")
        {
          $Status = 'approved';
        }
        else
        {
          $Status = 'pending';
        }

        $vendor = Vendor::where('id',$id)->update([
          'vendor_type_id' => $request->vendor_type_id,
          'name' => $request->name,
          'email' => $request->email,
          'password' => Hash::make($request->password),
          'company' => $request->company,
          'address' => $request->address,
          'phone' => $request->phone,
          'status' => $Status,
          'rating' => $request->rating
          
          

        ]);
        return redirect()->back()->with('success','Order Updated Successfully');
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

    // public function showregisterationform(){
    //     return view('admin.auth.register');
    //  }
    public function insert(array $data){
        
        Vendor::insert($data);
    }
}
