@extends('layouts.app2')
@section('content')

<div class="container">
    <div class="main-body">
    
          <!-- Breadcrumb -->
          <nav aria-label="breadcrumb" class="main-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html">Home</a></li>
              <li class="breadcrumb-item"><a href="javascript:void(0)">User</a></li>
              <li class="breadcrumb-item active" aria-current="page">User Profile</li>
            </ol>
          </nav>
          <!-- /Breadcrumb -->
    
          <div class="row gutters-sm">
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
                      <!--<button class="btn btn-primary">Follow</button>-->
                      <!--<button class="btn btn-outline-primary">Message</button>-->
                    </div>
                  </div>
                </div>
              </div>
              
            </div>
            <div class="col-md-8">
                
              <div class="card mb-3">
                <div class="card-body">
                    <h4 style="margin-top: 5px;">Basic Information</h4>
                    <div class="row">
                    <div class="col-sm-3 ">
                      <h6 class="mb-0">Full Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                     {{ $single_member->full_name }}
                    </div>
                  </div>
                    
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Mobile Number</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                     {{ $single_member->mobile_number }}
                    </div>
                  </div>
                  
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      {{ $single_member->email }}
                    </div>
                  </div>
                 
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Department</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      {{ $single_member->department }}
                    </div>
                  </div>
                  
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Passing Year</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      {{ $single_member->passing_year }}
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">T-Shirt Size</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      {{ $single_member->tshirt_size }}
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Transaction Id</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      {{ $single_member->paytransaction_id }}
                    </div>
                  </div>
                 
                 
                  
                  
                </div>
              </div>
              
            </div>
          </div>
          
        </div>
    </div>


@endsection