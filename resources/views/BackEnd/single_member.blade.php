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
                      <h6 class="mb-0">Name In Bangla</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                     {{ $single_member->NameInBangla }}
                    </div>
                  </div>
                    
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Fathers Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                     {{ $single_member->FathersName }}
                    </div>
                  </div>
                  
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Mothers Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      {{ $single_member->MothersName }}
                    </div>
                  </div>
                 
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Spouse Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      {{ $single_member->SpouseName }}
                    </div>
                  </div>
                  
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Date Of Birth</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      {{ $single_member->DOB }}
                    </div>
                  </div>
                 
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">NID</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                       <?php
                        
                        if($single_member->NID == null){
                            echo 'Not Availaable';
                        } else {
                            echo $single_member->NID;
                        }
                           ?>
                  
                    </div>
                    
                  </div>
                  
                  
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Phone Number</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <?php
                        
                        if($single_member->PhoneNumber == null){
                            echo 'Not Availaable';
                        } else {
                            echo $single_member->PhoneNumber; 
                        }
                           ?>
                    </div>
                  </div>
                 
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Cell Number</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      {{ $single_member->CellNumber }}
                    </div>
                  </div>
                 
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      {{ $single_member->Email }}
                    </div>
                  </div>
                  
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Blood Group</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      {{ $single_member->BloodGroup }}
                    </div>
                  </div>
                  
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Religion</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      {{ $single_member->Religion }}
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Gender</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      {{ $single_member->Gender }}
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">IEB</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php
                        
                        if($single_member->IEB == null){
                            echo 'Not Availaable';
                        } else {
                            echo $single_member->IEB; 
                        }
                           ?>
                    </div>
                  </div>
                  
                  
                  
                  
                </div>
              </div>
              
             

             
            </div>
          </div>
          
          
          <div class="row">
              <div class="col-md-6">
                                <div class="card mb-3">
                <div class="card-body">
                   <h4 style="margin-top: 5px;">Diploma Qualification</h4>
                   </hr>
                    <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Institution</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                     {{ $single_member->Institution }}
                    </div>
                  </div>
                    
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Department</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                     {{ $single_member->Department }}
                    </div>
                  </div>
                  
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Shift</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      {{ $single_member->Shift }}
                    </div>
                  </div>
                 
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Batch Or Passing Year</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      {{ $single_member->BatchOrPassingYear }}
                    </div>
                  </div>
                  
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Personal Details</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                       <?php
                        
                        if($single_member->PersonalDetails == null){
                            echo 'Not Availaable';
                        } else {
                            echo $single_member->PersonalDetails; 
                        }
                           ?>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">CV</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                       <?php
                        
                        if($single_member->CV == null){
                            echo 'Not Availaable';
                        } else {
                           
                            ?>
                            <a href="{{ asset($single_member->CV) }}" target="_blank" />Show CV</a>
                            <?php
                        }
                           ?>
                    </div>
                  </div>
                  
                </div>
              </div>
              </div>
              <div class="col-md-6">
                                <div class="card mb-3">
                <div class="card-body">
                   <h4 style="margin-top: 5px;">Professional Status</h4>
                   </hr>
                    <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Name Of Organization</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                     {{ $single_member->NameOfOrg }}
                    </div>
                  </div>
                    
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Position</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                     {{ $single_member->Position }}
                    </div>
                  </div>
                  
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Job Type</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      {{ $single_member->JobType }}
                    </div>
                  </div>
                 
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Working Place</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      {{ $single_member->WorkingPlace }}
                    </div>
                  </div>
                  
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Visiting Card</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                       <?php
                        
                        if($single_member->VisitingCard == null){
                            echo 'Not Availaable';
                        } else {
                           
                            ?>
                            <a href="{{ asset($single_member->VisitingCard) }}" target="_blank" />Show Visiting Card</a>
                            <?php
                        }
                           ?>
                    </div>
                  </div>
                  
                   <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">BkashTransactionId</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php
                        
                        if($single_member->BkashTransactionId == null){
                            echo 'Not Availaable';
                        } else {
                            echo $single_member->BkashTransactionId; 
                        }
                           ?>
                    </div>
                  </div>
                  
                 
                </div>
              </div>
              </div>
          </div>
          
          

        </div>
    </div>


@endsection