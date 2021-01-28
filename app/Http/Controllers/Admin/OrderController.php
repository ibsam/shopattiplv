<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Order;
use App\PaymentState;
use App\OrderState;
use DataTables;
class OrderController extends Controller
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

            $data = Order::with(['orderstate','paymentstate'])->orderBy('id','desc')->get();
            //dd($data);
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
        $Order = Order::where('id',$id)->update([
          'payment_state_id' => $request->payment_state_id,
          'order_state_id' => $request->order_state_id
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

    public function getOrderDetail($id){
        //dd($id);
        $order = Order::with(['customer.customerDetail' => function($query){
            return $query->where('is_billing',1)->first(); 
        },'orderDetail','orderDetail.product:id,name,url_name'])
        ->where('id',$id)->first();
        //dd($order);
        $paymentstates = PaymentState::get();
        $orderstates = OrderState::get();
        return view('admin.pages.order.show-order', compact('order','paymentstates','orderstates'));
    }

    public function generateInvoice(){
      return response('Hello world');
    }
}
