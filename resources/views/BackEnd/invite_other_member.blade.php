@extends('layouts.app2')
@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Invite Other Member</h1>
    </div>

    <!-- Content Row -->
    <div class="row">
        <div class="col-md-8">
            <div class="card mb-3">
                <div class="card-header">
                    <h3>Invitation Form</h3>
                </div>
               <div class="card-body"> 
                    <form method="post" action="{{route('send.invite')}}">
                          @csrf
                      <div class="form-group">
                        <label for="exampleInputMobile">Mobile Number:</label>
                        <input type="text" name="mobile_no" class="form-control" id="exampleInputMobile" placeholder="Enter Mobile Number">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Enter Message:</label><textarea name="message" rows="5" class="form-control"></textarea>
                      </div>
                      <input type="submit" class="btn btn-primary" value="Send">
                    </form>
                </div>     
          </div>      
                
        </div>
    </div>
    
@endsection
