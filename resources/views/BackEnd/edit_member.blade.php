@extends('layouts.app2')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-info">
                <div class="card-header bg-primary text-white">Edit Member</div>
                  <div class="card-body">
                      <form method="post" action="{{ route('update.member') }}">
                          @csrf
                        <div class="form-group">
                            <label>Full Name:</label>
                            <input type="text" name="full_name" value="{{ $editable_member->full_name }}" class="form-control">
                            <input type="hidden" name="id" value="{{ $editable_member->id }}">
                        </div>
                        <div class="form-group">
                            <label>Mobile Number:</label>
                            <input type="text" name="mobile_number" value="{{ $editable_member->mobile_number }}" class="form-control">                       
                        </div>
                        <div class="form-group">
                            <label>Email Address:</label>
                            <input type="text" name="email" value="{{ $editable_member->email }}" class="form-control">                       
                        </div>
                        <div class="form-group">
                            <label>Department:</label>
                            <input type="text" name="department" value="{{ $editable_member->department }}" class="form-control">                       
                        </div>
                        <div class="form-group">
                            <label>Passing Year:</label>
                            <input type="text" name="passing_year" value="{{ $editable_member->passing_year }}" class="form-control">                       
                        </div>
                         <div class="form-group">
                            <label>T-Shirt Size:</label>
                            <input type="text" name="tshirt_size" value="{{ $editable_member->tshirt_size }}" class="form-control">                       
                        </div>
                        <div class="form-group">
                            <label>Payment Transaction Id:</label>
                            <input type="text" name="paytransaction_id" value="{{ $editable_member->paytransaction_id }}" class="form-control">                       
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

