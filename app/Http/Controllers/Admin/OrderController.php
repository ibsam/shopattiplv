<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Order;
use App\Product;
use App\PaymentState;
use App\User;
use App\OrderState;
use DataTables;
class OrderController extends Controller
{
 
    public function __construct(){
      $this->middleware('auth:web');
    }
    
    public function index(Request $request)
    {
        if ($request->ajax()) {
          $user_id = auth()->user()->id;
          $user = User::findorfail($user_id);
          if( $user_id ==1)
          {
              // $added_by_id = $user_id;
              $data = Order::with(['orderstate','paymentstate','product'])->orderBy('id','desc')->get();
          }
          else
          {
              $vendor_id =$user->vendor['id'];
              $added_by_id = $vendor_id;
             $data = Order::with(['orderstate','paymentstate','product'])->where('vendor_id',$vendor_id)->orderBy('id','desc')->get();
          } 
            return DataTables::of($data)
              ->addIndexColumn()
              ->editColumn('order_code',function($data){
                    return '<a href='. route('order.order_detail',$data->id). '>'. $data->order_code .'</a>';
              })
              ->addColumn('order_status', function ($data) {
      
                return $data->orderstate->order_state;
              })
              ->addColumn('payment_status',function($data){
                
                return $data->paymentstate->payment_state; 
              })
              ->addColumn('vendor',function($data){
                
                
                if($data->product['added_by_id'] == 1){
                // $vendor = Product::with('vendor')->where('id',$data->product_id)->orderBy('id','desc')->get();
                // return $vendor[0]->vendor['name']; 
                return 'Admin';
                }else{
                  $vendor = Order::with('vendor')->where('vendor_id',$data->vendor_id)->orderBy('id','desc')->get();
                  return $vendor[0]->vendor['name']; 
                }
              })
              ->addColumn('action', function ($row) {
                return view('admin.pages.components.crudPannelButtons')->with(['data' => $row, 'model' => 'category']);
              })
              ->escapeColumns([])
            //   ->rawColumns(['action'])
              ->make(true);
          }
          $breadcrumbs = [
            ['link' => "/admin", 'name' => "Dashboard"],
            ['link' => route('order.index'), 'name' => "Order"],
            ['name' => "Order list"]
          ];
          return view('admin.pages.order.index', compact('breadcrumbs'));
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
        $Order = Order::where('id',$id)->update([
          'payment_state_id' => $request->payment_state_id,
          'order_state_id' => $request->order_state_id
        ]);
        return redirect()->back()->with('success','Order Updated Successfully');
    }
    public function destroy($id)
    {
        //
    }

    public function getOrderDetail($id){
        $order = Order::with(['customer.customerDetail' => function($query){
            return $query->where('is_billing',1)->first(); 
        },'orderDetail','orderDetail.product:id,name,url_name'])
        ->where('id',$id)->first();
        $paymentstates = PaymentState::get();
        $orderstates   = OrderState::get();
        return view('admin.pages.order.show-order', compact('order','paymentstates','orderstates'));  
    }

    public function generateInvoice(){
      return response('Hello world');
    }
}