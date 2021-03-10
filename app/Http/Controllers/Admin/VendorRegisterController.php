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
   
    public function __construct(){
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
    

  
    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

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

    
    public function update(Request $request, $id )
    {
      
        //
       // $user_id = auth()->user()->id;
        $userData             = User::find($request->user_id);
        $userData->name       = $request->name;
        $userData->email      = $request->email;
        if($request->password != null)
        {
          $userData->password   = Hash::make($request->password);
        }
        $userData->save();

        
        
        if($request->status == "on")
        {
          $Status = 'approved';
        }
        else
        {
          $Status = 'pending';
        }                       
        // $vendor = Vendor::find($id);
        // $vendor = Vendor::where('id',$id)->update([
        //   'vendor_type_id' => $request->vendor_type_id,
        //   'name'     => $request->name,
        //   'email'    => $request->email,
        //   'password' => Hash::make($request->password),
        //   'company'  => $request->company,
        //   'address'  => $request->address,
        //   'phone'    => $request->phone,
        //   'status'   => $Status
        // ]);

          $vendor                 = Vendor::find($id);
          $vendor->vendor_type_id = $request->vendor_type_id;
          $vendor->name           = $request->name;
          $vendor->email          = $request->email;
          if($request->password  != null){
            $vendor->password     = Hash::make($request->password);
          }
          $vendor->company        = $request->company;
          $vendor->address        = $request->address;
          $vendor->phone          = $request->phone;
          $vendor->status         = $Status;
          $vendor->save();

        return redirect()->back()->with('success','Order Updated Successfully');
    }

    
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
