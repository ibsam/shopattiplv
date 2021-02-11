
@extends('admin/layouts/contentLayoutMaster')

@section('vendor-style')
        {{-- vendor css files --}}
       
    <link rel="stylesheet" href="{{ asset(mix('vendors/css/forms/select/select2.min.css')) }}">
@endsection

@section('page-style')
         {{-- Page Css files --}}
         
@endsection

@section('content')

<!-- // Basic multiple Column Form section start -->

<div class="card">
        <div class="card-header">
          <h1 class="h2">Order Detail</h1>
        </div>
		<form method="post" action="{{ route('order.update',$order)}}">
			<div class="card-header row gutters-5">
				
				@method('PUT')
				@csrf
				<div class="col text-center text-md-left">
				</div>
				@php
				$user_id = auth()->user()->id;
				if( $user_id ==1)
				{
					@endphp

				<div class="col-md-3 ml-auto">
					<label for="update_payment_status">Payment Status</label>
					<select class="form-control aiz-selectpicker"  data-minimum-results-for-search="Infinity" id="update_payment_status" name="payment_state_id">
						@foreach($paymentstates as $paymentstate)
							<option value="{{$paymentstate->id}}" {{ ($paymentstate->id == $order->payment_state_id)? 'selected': '' }}>{{ $paymentstate->payment_state }}</option>
						@endforeach
					</select>
				</div>
				<div class="col-md-3 ml-auto">
					<label for=update_delivery_status"">Delivery Status</label>
					<select class="form-control aiz-selectpicker"  data-minimum-results-for-search="Infinity" id="update_delivery_status" name="order_state_id">
						@foreach($orderstates as $orderstate)
							<option value="{{ $orderstate->id }}" {{ ($orderstate->id == $order->order_state_id)? 'selected': '' }}>{{ $orderstate->order_state }}</option>
						@endforeach
					</select>
				</div>
				<div class="col-md-3 ml-auto">
					<button type="submit" class="btn btn-primary mt-2">Update</button>
				</div>

				@php
				}
				@endphp
				
			</div>
		</form>
    	<div class="card-body">
        <div class="card-header row gutters-6">
  			<div class="col text-center text-md-left">
            <address>
                <strong class="text-main">{{ $order->customer->first_name }} {{ $order->customer->last_name }}</strong><br>
                {{ $order->customer->email }}<br>
                {{  $order->customer->phone }}<br>
                {{  $order->customer->customerDetail[0]->address1 }}, {{ $order->customer->customerDetail[0]->city }}, {{ $order->customer->customerDetail[0]->zip_code }}<br>
                {{  $order->customer->customerDetail[0]->country }}
            </address>
  				</div>
  				<div class="col-md-4 ml-auto">
            <table>
        				<tbody>
            				<tr>
            					<td class="text-main text-bold">Order #</td>
            					<td class="text-right text-info text-bold">	{{ $order->order_code }}</td>
            				</tr>
            				<tr>
                                <td class="text-main text-bold">Order Status</td>
                                    @php
                                      $status = $order->orderstate->first()->order_state;
                                    @endphp
            					<td class="text-right">
                                    @if($status == 'Delivered')
                                        <span class="badge badge-inline badge-success">{{$status}}</span>
                                    @else
                                        <span class="badge badge-inline badge-info">{{$status}}</span>
                                    @endif
      					        </td>
            				</tr>
            				<tr>
            					<td class="text-main text-bold">Order Date</td>
            					<td class="text-right">{{ $order->created_at }}</td>
            				</tr>
                    <tr>
            					<td class="text-main text-bold">Total amount</td>
            					<td class="text-right">
            						{{ number_format($order->total_price,2) }}
            					</td>
            				</tr>
                    <tr>
            					<td class="text-main text-bold">Payment method</td>
            					<td class="text-right">COD</td>
            				</tr>
        				</tbody>
    				</table>
  				</div>
  			</div>
    		<hr class="new-section-sm bord-no">
    		<div class="row">
    			<div class="col-lg-12 table-responsive">
    				<table class="table table-bordered invoice-summary">
        				<thead>
            				<tr class="bg-trans-dark">
                        <th class="min-col">#</th>
                        <th width="10%">Photo</th>
        					      <th class="text-uppercase">Description</th>
                        <th class="text-uppercase">Delivery Type</th>
              					<th class="min-col text-center text-uppercase">Qty</th>
              					<th class="min-col text-center text-uppercase">Price</th>
        					       <th class="min-col text-right text-uppercase">Total</th>
            				</tr>
        				</thead>
        				<tbody>
                    @foreach ($order->orderDetail as $key => $orderDetail)
					
                      <tr>
                        <td>{{ $key+1 }}</td>
                        <td>
                          @if ($orderDetail->product != null)
                            <a href="/{{ $orderDetail->product->url_name }}_{{ $orderDetail->product->id }}.htm" target="_blank"><img height="50" src="{{ asset('uploads/product_image/product_'.$orderDetail->product->id.'_1.jpg') }}"></a>
                          @else
                            <strong>N/A</strong>
                          @endif
                          </td>
                        <td>
                          @if ($orderDetail->product != null)
                            <strong><a href="/{{ $orderDetail->product->url_name }}_{{ $orderDetail->product->id }}.htm" target="_blank" class="text-muted">{{ $orderDetail->product->name }}</a></strong>
                            <small>{{ $orderDetail->variation }}</small>
                          @else
                            <strong>Product Unavailable</strong>
                          @endif
                        </td>
                        <td>Home Delivery</td>
                        <td class="text-center">{{ $orderDetail->qty }}</td>
                        <td class="text-center">{{ number_format($orderDetail->price/$orderDetail->qty,2) }}</td>
                        <td class="text-center">{{ number_format($orderDetail->price,2) }}</td>
                      </tr>
                    @endforeach
        				</tbody>
    				</table>
    			</div>
    		</div>
    		<div class="clearfix float-right">
    			<table class="table">
        			<tbody>
        			<tr>
        				<td>
        					<strong class="text-muted">Sub Total:</strong>
        				</td>
        				<td>
        					{{ number_format($order->total_price,2) }}
        				</td>
        			</tr>
        			<tr>
        				<td>
        					<strong class="text-muted">Tax :</strong>
        				</td>
        				<td>
        					{{ number_format(0,2) }}
        				</td>
        			</tr>
                    <tr>
        				<td>
        					<strong class="text-muted">Shipping :</strong>
        				</td>
        				<td>
        					{{ number_format($order->orderDetail->sum('shipping_cost'),2) }}
        				</td>
        			</tr>
        			<tr>
        				<td>
        					<strong class="text-muted">TOTAL :</strong>
        				</td>
        				<td class="text-muted h5">
        					{{ number_format($order->total_price,2) }}
        				</td>
        			</tr>
        			</tbody>
    			</table>
          <div class="text-right no-print">
            <a href="{{ route('order.generate_invoice', $order->id) }}" type="button" class="btn btn-icon btn-light"><i class="las la-print"></i></a>
          </div>
    		</div>

    	</div>
    </div>
<!-- // Basic Floating Label Form section end -->
@endsection

@section('vendor-script')
<script src="{{ asset(mix('vendors/js/forms/select/select2.full.min.js')) }}"></script>
<script src="{{ asset(mix('js/scripts/forms/form-select2.js')) }}"></script>


{{-- vendor files --}}
@endsection
