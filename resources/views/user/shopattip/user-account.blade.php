 
@extends('layouts.master')
@section('content') 
 
<div class="page-content">

<section class="dashboard-page">
  <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-4">
                <div class="dashboard_menu">
                    <ul class="nav nav-tabs border-0 flex-column" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link active" id="dashboard-tab" data-toggle="tab" href="#dashboard" role="tab" aria-controls="dashboard" aria-selected="false">
                        Dashboard</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="orders-tab" data-toggle="tab" href="#orders" role="tab" aria-controls="orders" aria-selected="false">
                        My Orders</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="address-tab" data-toggle="tab" href="#address" role="tab" aria-controls="address" aria-selected="true">
                       My Address</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="account-detail-tab" data-toggle="tab" href="#account-detail" role="tab" aria-controls="account-detail" aria-selected="true">
                      Account details</a>
                      </li>
                      <li class="nav-item">
                      <form method="post" action="/customer_logout">
                        @csrf
                        <button class="nav-link" href="user-login.php">Logout</button>
                      </form>
                      </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-9 col-md-8 mt-5 mt-lg-0 mt-md-0">
                <div class="tab-content dashboard_content">
                  	<div class="tab-pane fade active show" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
                    	<div class="card border-0">
                        	
                            <div class="card-body">
                    			<div class="welcome-msg">
                <h6>Hello, {{ $Customer->first_name}}</h6>
                <p>From your My Account Dashboard you have the ability to view a snapshot of your recent account activity and update your account information. Select a link below to view or edit information.</p>
              </div>
                            </div>
                        </div>
                  	</div>
                  	<div class="tab-pane fade" id="orders" role="tabpanel" aria-labelledby="orders-tab">
                    	<div class="card border-0">
                                <h5 class="font-w-6">My Orders</h5>
                            <div class="card-body">
                    			<div class="table-responsive">
                          
                          @if(count($Customer->orders) > 0)
                                    <table class="table" >
                                        <thead>
                                            <tr>
                                                <th>Order</th>
                                                <th>Date</th>
                                                <th>Status</th>
                                                <th>Total</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                       
                                        @foreach($Customer->orders as $Order)
                                            <tr>
                                                <td>{{$Order->order_code}}</td>
                                                <td>{{$Order->created_at}}</td>
                                                <td>{{$Order->orderState->order_state}}</td>
                                                <td>{{$Order->total_price}}</td>
                                                <td><a href="#" class="btn btn-primary btn-sm">View</a></td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    @endif
                                </div>
                            </div>
                        </div>
                  	</div>
					<div class="tab-pane fade" id="address" role="tabpanel" aria-labelledby="address-tab">
                    	<div class="row">
                        	<div class="col-lg-6">
                                <div class="card mb-3 mb-lg-0 border-0">
                                         <h5 class="font-w-6">Billing Address</h5>
                                    <div class="card-body">
                      @if(!empty($Customer->customerDetail) )              
                      @foreach($Customer->customerDetail as $CustomerDetail)
                          @if($CustomerDetail->is_billing == 1)
                            <address>
                              {{ $CustomerDetail->first_name}} {{$CustomerDetail->last_name }}<br>
                              {{ $CustomerDetail->address1 }}<br>
                              {{ $CustomerDetail->city }},{{ $CustomerDetail->state }}<br>
                              {{ $CustomerDetail->country }}<br>
                              {{ $CustomerDetail->zip_code }}<br>
                            </address>
                          @endif
                      @endforeach
                      @endif
                        <!-- <a href="#">Edit Address</a> -->
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="card border-0">
                                    <h5 class="font-w-6">Shipping Address</h5>
                              
                                    <div class="card-body">
                                    <address>
                                    @if(!empty($Customer->customerDetail) )     
                                      {{ $Customer->customerDetail[0]->first_name}} {{$Customer->customerDetail[0]->last_name }}<br>
                                      {{ $Customer->customerDetail[0]->address1 }}<br>
                                      {{ $Customer->customerDetail[0]->city }},{{ $Customer->customerDetail[0]->state }}<br>
                                      {{ $Customer->customerDetail[0]->country }}<br>
                                      {{ $Customer->customerDetail[0]->zip_code }}<br>
                                      @endif
                                    </address>
                                        <!-- <a href="#">Edit Address</a> -->
                                    </div>
                                </div>
                            </div>
                        </div>
					</div>
                    <div class="tab-pane fade" id="account-detail" role="tabpanel" aria-labelledby="account-detail-tab">
						<div class="card border-0">
                           <h5 class="font-w-6">Account Details</h5>
                            <div class="card-body">
                    			<!-- <p>Already have an account? <a href="/customer_login">Login</a></p> -->
                                <form method="post" name="enq" action="/customer-update">
                                @csrf
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                        	<label>First Name <span class="required">*</span></label>
                                            <input required="" class="form-control" name="first_name" type="text" value="{{ $Customer->first_name}}" disabled="true">
                                            @error('first_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                         </div>
                                         
                                         <div class="form-group col-md-6">
                                        	<label>Last Name <span class="required">*</span></label>
                                            <input required="" class="form-control" name="last_name" value="{{ $Customer->last_name}}" disabled="true">
                                            @error('last_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-12">
                                        	<label>Phone No<span class="required">*</span></label>
                                            <input required="" class="form-control" name="phone_no" type="text" value="{{ $Customer->phone_no}}" disabled="true">
                                            @error('phone_no')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-12">
                                        	<label>Email Address <span class="required">*</span></label>
                                            <input required="" class="form-control" name="email" type="email" value="{{ $Customer->email}}" disabled="true">
                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <!-- <div class="col-md-12">
                                            <button type="submit" class="btn btn-primary" name="submit" value="Submit">Save</button>
                                        </div> -->
                                    </div>
                                </form>
                            </div>
                        </div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>



 <!--multi sec start-->
    
    <section class="bg-pink py-9 position-relative overflow-hidden">
      <div class="container">
        <div class="row justify-content-center text-center mb-1">
          <div class="col-lg-6 col-md-10">
            <div class="mb-4">
              <h2 class="mb-0">Be the first and get weekly updates</h2>
            </div>
            <div class="subscribe-form">
              <form id="mc-form" class="row align-items-center no-gutters mb-3">
                <div class="col">
                  <input value="" name="EMAIL" class="email form-control input-2 bg-white" placeholder="Email Address" required="" type="email">
                </div>
                <div class="col-auto">
                  <input class="btn dark-btn overflow-auto" name="subscribe" value="Subscribe" type="submit">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--multi sec end--> 


</div>

@endsection

