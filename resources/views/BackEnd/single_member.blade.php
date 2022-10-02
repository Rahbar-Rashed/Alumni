@extends('layouts.app2')
@section('content')

<div class="container">
    <div class="main-body">
    
          <!-- Breadcrumb -->
          <nav aria-label="breadcrumb" class="main-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a class="btn btn-primary float-right" href=" {{route('approve.members')}}">Approve Member List</a></li>
              <li class="breadcrumb-item"><a class="btn btn-primary float-right" href=" {{route('unapprove.members')}}">Unapprove Member List</a></li>
              <!-- <li class="breadcrumb-item"><a href="javascript:void(0)">User</a></li>
              <li class="breadcrumb-item active" aria-current="page">User Profile</li> -->
            </ol>
          </nav>
          <!-- /Breadcrumb -->
    
          <!-- <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
             <div class="card">
            <div class="card-body">
                <div class="d-flex flex-column align-items-center text-center">                   
                    <?php
                    if($single_member->Image == null){
                            ?>
                            <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">                   
                         <?php                    
                        } else {                           
                            ?>
                            <img src="{{ asset($single_member->Image) }}" style="width: 150px;" class="rounded-circle" />
                            <?php
                        }
                           ?>                    
          
                    <div class="mt-3">
                      <h4>{{ $single_member->NameInEnglish }}</h4>
                      <p class="text-secondary mb-1">{{ $single_member->Position }}</p>
                      <p class="text-muted font-size-sm">{{ $single_member->PresentAddress }}</p>
                     
                    </div>
                  </div>
                </div>
              </div>
              </div>
            </div> -->


            <div class="row gutters-sm">
            <div class="col-md-8">
                
              <div class="card mb-3">

                <div class="card-body">
                    <h4 style="margin-top: 5px;">Details Information</h4>
                    <div class="row">
                    <div class="col-sm-5">
                      <h6 class="mb-0">Full Name</h6>
                    </div>
                    <div class="col-sm-7 text-secondary">
                     {{ $single_member->full_name }}
                    </div>
                  </div>
                    
                  <div class="row">
                    <div class="col-sm-5">
                      <h6 class="mb-0">Mobile Number</h6>
                    </div>
                    <div class="col-sm-7 text-secondary">
                     {{ $single_member->mobile_number }}
                    </div>
                  </div>
                  
                  <div class="row">
                    <div class="col-sm-5">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-7 text-secondary">
                      {{ $single_member->email }}
                    </div>
                  </div>
                 
                  <div class="row">
                    <div class="col-sm-5">
                      <h6 class="mb-0">Department</h6>
                    </div>
                    <div class="col-sm-7 text-secondary">
                      {{ $single_member->department }}
                    </div>
                  </div>
                  
                  <div class="row">
                    <div class="col-sm-5">
                      <h6 class="mb-0">Passing Year</h6>
                    </div>
                    <div class="col-sm-7 text-secondary">
                      {{ $single_member->passing_year }}
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-5">
                      <h6 class="mb-0">T-Shirt Size</h6>
                    </div>
                    <div class="col-sm-7 text-secondary">
                      {{ $single_member->tshirt_size }}
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-5">
                      <h6 class="mb-0">Home District</h6>
                    </div>
                    <div class="col-sm-7 text-secondary">
                      {{ $single_member->home_district }}
                    </div>
                  </div>
              
                   <div class="row">
                    <div class="col-sm-5">
                      <h6 class="mb-0">Dropping Point</h6>
                    </div>
                    <div class="col-sm-7 text-secondary">
                      {{ $single_member->dropping_point }}
                    </div>
                  </div>
                   <div class="row">
                    <div class="col-sm-5">
                      <h6 class="mb-0">Account Transaction Number</h6>
                    </div>
                    <div class="col-sm-7 text-secondary">
                      {{ $single_member->account_transaction_number }}
                    </div>
                  </div>
                   <div class="row">
                    <div class="col-sm-5">
                      <h6 class="mb-0">Payment Type</h6>
                    </div>
                    <div class="col-sm-7 text-secondary">
                      {{ $single_member->payment_type }}
                    </div>
                  </div>
                  <!-- <div class="row">-->
                  <!--  <div class="col-sm-5">-->
                  <!--    <h6 class="mb-0">Guest Number</h6>-->
                  <!--  </div>-->
                  <!--  <div class="col-sm-7 text-secondary">-->

                  <!--    @if($single_member->guest_money == "1000")-->
                  <!--        <h6>One Guest</h6>-->
                  <!--    @elseif($single_member->guest_money == "2000")    -->
                  <!--        <h6>Two Guest</h6>-->
                  <!--    @elseif($single_member->guest_money == "3000")    -->
                  <!--        <h6>Three Guest</h6>   -->
                  <!--    @elseif($single_member->guest_money == "0")    -->
                  <!--        <h6>No Guest</h6>     -->

                  <!--    @endif-->
                  <!--  </div>-->
                  <!--</div>-->
                   <div class="row">
                    <div class="col-sm-5">
                      <h6 class="mb-0">Driver</h6>
                    </div>
                    <div class="col-sm-7 text-secondary">
                      @if($single_member->driver == "on")
                        <h6>Driver Available</h6>
                      @elseif($single_member->driver == "")  
                        <h6>No Driver</h6>
                      @endif  
                    </div>
                  </div>
                   <div class="row">
                    <div class="col-sm-5">
                      <h6 class="mb-0">Payable Amount</h6>
                    </div>
                    <div class="col-sm-7 text-secondary">
                      {{ $single_member->payable_amount }}
                    </div>
                  </div>  
                  <div class="row">
                    <div class="col-sm-5">
                      <h6 class="mb-0">Approval Status</h6>
                    </div>
                    <div class="col-sm-7 text-secondary">
                      {{ $single_member->approval_status }}
                    </div>
                  </div>  
                  <div class="row">
                    <div class="col-sm-5">
                      <h6 class="mb-0">Invitation Code</h6>
                    </div>
                    <div class="col-sm-7 text-secondary">

                      @if($single_member->invitation_code == "0")
                          <h6>No Invition Code</h6> 
                      @else                           
                          <h6>{{$single_member->invitation_code}}</h6>     

                      @endif
                    </div>
                  </div> 
                  <div class="row">
                    <div class="col-sm-5">
                      <h6 class="mb-0">Registration Time</h6>
                    </div>
                    <div class="col-sm-7 text-secondary">
                        <h6>
                            {{ date('d-m-Y', strtotime($single_member->created_at))}}</h6>     
                    </div>
                  </div> 
                </div>
                @if($single_member->invitation_code != "0" && $single_member->sms_status != 1)
                <button id="invitation" class="btn btn-success">Send Invitation</button>
                @elseif($single_member->approval_status == 0)
                    <a href="{{ URL::to('approve/member') }}/{{ $single_member->id }}" class="btn btn-success">Approve</a>
                @elseif($single_member->invitation_code == "0")
                    <a href="{{ URL::to('generate/invitecode') }}/{{ $single_member->id }}" class="btn btn-success">Invite Code</a>
                @elseif($single_member->sms_status == 1)
                    <h6 style="background: red;color: black;border-radius: 7px;padding: 8px;font-weight: bold;">Invitation Already Sent</h6>
                @endif
              </div>
          
            <div class="card mb-3">
                     <div class="invitation_form" style="display:none;">
                <div class="card-header">
                    <h3>Invitation Form</h3>
                </div>
               <div class="card-body"> 
                    <form method="post" action="{{route('send.invite')}}">
                          @csrf
                      <div class="form-group">
                        <label for="exampleInputMobile">Mobile Number:</label>
                        <input type="hidden" name="member_id" value="{{ $single_member->id }}">
                        <input type="text" value="+88{{ $single_member->mobile_number }}" name="mobile_no" class="form-control" id="exampleInputMobile" placeholder="Enter Mobile Number">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Enter Message:</label><textarea name="message" rows="5" class="form-control">অভিনন্দন, ফরিদপুর পলিটেকনিক ইনস্টিটিউট এর সূবর্ণ জয়ন্তী উৎসবে আপনার রেজিস্ট্রেশন সম্পন্ন হয়েছে। আপনার ইনভাইটেশন কোড {{$single_member->invitation_code}} প্রয়োজনে : +8801713613444
www.fpiaabd.org 
FPIAA.</textarea>
                      </div>
                      <input type="submit" class="btn btn-primary" value="Send">
                    </form>
                </div>   
                
                </div>
         
          </div>      
   </div>          
        </div>
    </div>

<script type="text/javascript">
// Paid Status

	$(document).on('click','#invitation', function(){
			$('.invitation_form').show();
	});
</script>



@endsection