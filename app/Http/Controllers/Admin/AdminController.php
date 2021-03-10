<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DataTables;
use App\Product;
use App\Order;
use App\Customer;
use App\Vendor;
use App\User;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    private $directory = 'admin';
    public function __construct()
    {
        $this->middleware('auth');
    }
   
    public function home(){

        
        $breadcrumbs = [
            ['link'=>"home",'name'=>"Home"], ['name'=>"Index"]
        ];
        $sales     = Order::sum('total_price');
        $orders    = Order::count('id'); 
        $products  = Product::count('id');
        $customers = Customer::count('id');
       
        return view($this->directory.'/content/home',compact('customers','sales','orders','products'), ['breadcrumbs' => $breadcrumbs]);
    }

    
    public function VendorProfile()
    {
        $id = \Auth::user()->id;
        if($id == 1){
            $vendor = User::where('id',$id)->first();
            return view('admin.content.profile',compact('vendor'));
        }else{
            $vendor = Vendor::where('user_id',$id)->first();
            return view('admin.content.profile',compact('vendor'));
        } 
    }

    public function ProfileUpdate(Request $request)
    {
        $id                     = \Auth::user()->id;
       

        if($id != 1){

            $userData               = User::find($id);
            $userData->name         = $request->name;
            $userData->email        = $request->email;
            if($request->password   != null){
                $userData->password = Hash::make($request->password);
            }
            $userData->save();

            $vendor = Vendor::find($request->vendor_id);
            $vendor->name     = $request->name;
            $vendor->email    = $request->email;
            $vendor->password = $request->password;
            $vendor->company  = $request->company;
            $vendor->address  = $request->address;
            $vendor->phone    = $request->phone;
            $vendor->save();
        }else
        {
            $userData               = User::find($id);
            $userData->name         = $request->name;
            $userData->email        = $request->email;
            if($request->password   != null){
                $userData->password = Hash::make($request->password);
            }
            $userData->save();
        }
        return redirect('admin');
    }

    public function getTest(Request $request)
    {
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
  
    public function index()
    {
        //
    }
    public function create()
    {
        //
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
        //
    }

    public function update(Request $request, $id)
    {
        //
    }
    public function destroy($id)
    {
        //
    }

    
}
