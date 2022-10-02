@extends('layouts.app2')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-info">
                <div class="card-header bg-primary text-white">Edit Member</div>
                  <div class="card-body">
                      <form method="post" action="{{ route('update.member') }}">
                          @csrf
                          
                          <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Full Name:</label>
                                    <input type="text" name="full_name" value="{{ $editable_member->full_name }}" class="form-control">
                                    <input type="hidden" name="id" value="{{ $editable_member->id }}">
                            </div>
                            
                            <div class="form-group col-md-6">
                            <label>Mobile Number:</label>
                            <input type="text" name="mobile_number" value="{{ $editable_member->mobile_number }}" class="form-control">                       
                            </div>
                          </div>
                          
                          <div class="form-row">
                              <div class="form-group col-md-6">
                            <label>Email Address:</label>
                            <input type="text" name="email" value="{{ $editable_member->email }}" class="form-control">                       
                        </div>
                        <div class="form-group col-md-6">
                            <label>Department:</label>
                            <input type="text" name="department" value="{{ $editable_member->department }}" class="form-control">                       
                        </div>
                          </div>
                        
                        <div class="form-row">
                            <div class="form-group col-md-6">
                            <label>Passing Year:</label>
                            <input type="text" id="pass_year" name="passing_year" onkeyup="myFunction2()" value="{{ $editable_member->passing_year }}" class="form-control">                       
                        </div>
                         <div class="form-group col-md-6">
                            <label>T-Shirt Size:</label>
                            <input type="text" name="tshirt_size" value="{{ $editable_member->tshirt_size }}" class="form-control">                       
                        </div>
                        </div>
                        
                        <div class="form-row">
                            <div class="form-group col-md-6">
                            <label>Home District:</label>
                            <input type="text" name="home_district" value="{{ $editable_member->home_district }}" class="form-control">                       
                        </div>
                         <div class="form-group col-md-6">
                            <label>Bus Dropping Point/Own Car:</label>
                            <input type="text" name="dropping_point" value="{{ $editable_member->dropping_point }}" class="form-control">                       
                        </div>
                        </div>
                        
                        <div class="form-row">
                        <div class="form-group col-md-6">
                         <label for="exampleInputEmail1">Payment Type (Send Money)<span style="color: red;">*</span></label>
                        <select class="form-control" name="payment_type">
                          <option>Select Type</option>
                          <option
                          value="BKash" {{($editable_member->payment_type == 'BKash' ) ? "selected" : '' }}>BKash - 
                          01915605971
                          </option>
                          <option value="Nagad" {{($editable_member->payment_type == 'Nagad' ) ? "selected" : '' }} >Nagad - 01915605971</option>
                          <option value="Rocket" {{($editable_member->payment_type == 'Rocket' ) ? "selected" : '' }}>Rocket - 019156059716</option>
                            </select>
                            </div>
                        <div class="form-group col-md-6">
                        <label for="exampleInputEmail1">Account Transaction Number
                        </label>
                        <input type="text" name="account_transaction_number" class="form-control" value="{{ $editable_member->account_transaction_number }}" id="exampleInputPassword1" placeholder="Write Your Bikash/Nogod/Rocket No">
                        <span style="color: red;" class="text-danger"></span>
                        </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                            <label>Driver:</label>
                                <input type="checkbox" name="driver" value="on" style="font-size: 7px;" id="checkDriver" onclick="myFunction3()" class="form-control" @if($editable_member->driver == 'on') checked="checked" @endif >
                        </div>
                        <div class="form-group col-md-6">
                            <label>Payable Amount:</label>
                            <input type="text" name="payable_amount" id="count" value="{{ $editable_member->payable_amount }}" class="form-control" readonly>                       
                        </div>
                        </div>
                        
                        <button type="submit" class="btn btn-primary btn-block">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

