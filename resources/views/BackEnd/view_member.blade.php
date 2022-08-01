@extends('layouts.app2')
@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"></h1>
        <!--<a href="" class="d-none d-sm-inline-block btn btn-primary shadow-sm">Add Book</a>-->
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3 bg-primary">
            <h6 class="m-0 font-weight-bold text-white">Members List</h6>
        </div>
        <div class="card-body">
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
            
            <div class="col-md-12">
              <div class="card mb-3">
                <div class="card-body">
                    
                     <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-6 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Basic Information</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">Fathers Name: {{ $single_member->FathersName }}</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">Mothers Name: {{ $single_member->MothersName }}</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">Spouse Name: {{ $single_member->SpouseName }}</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">Date Of Birth: {{ $single_member->DOB }}</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">Home District: {{ $single_member->HomeDistrict }}</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                NID:
                                <?php
                        
                        if($single_member->NID == null){
                            echo 'Not Availaable';
                        } else {
                            echo $single_member->NID;
                        }
                        ?>
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"> Phone Number:
                                <?php
                        
                        if($single_member->PhoneNumber == null){
                            echo 'Not Availaable';
                        } else {
                            echo $single_member->PhoneNumber; 
                        }
                           ?>
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">Cell Number: {{ $single_member->CellNumber }}</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">Email: {{ $single_member->Email }}</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">Blood Group: {{ $single_member->BloodGroup }}</div>
                            
                            <div class="h5 mb-0 font-weight-bold text-gray-800">Religion: {{ $single_member->Religion }}</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"> Gender: {{ $single_member->Gender }}</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                IEB:
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
                      <h6 class="mb-0">Home District</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      {{ $single_member->HomeDistrict }}
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
                
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Fathers Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      {{ $single_member->FathersName }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                     <div class="col-sm-3">
                      <h6 class="mb-0">Mothers Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      {{ $single_member->MothersName }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                     <div class="col-sm-3">
                      <h6 class="mb-0">Spouse Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      {{ $single_member->SpouseName }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Date Of Birth</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      {{ $single_member->DOB }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                   <div class="col-sm-3">
                      <h6 class="mb-0">Home District</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      {{ $single_member->HomeDistrict }}
                    </div>
                  </div>
                  <hr>
                  
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
                  <hr>
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
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Cell Number</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      {{ $single_member->CellNumber }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      {{ $single_member->Email }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Blood Group</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      {{ $single_member->BloodGroup }}
                    </div>
                  </div>
                  <hr>
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

              <div class="row gutters-sm">
                <div class="col-sm-6 mb-3">
                  <div class="card h-100">
                    <div class="card-body">
                      <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2">assignment</i>Project Status</h6>
                      <small>Web Design</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small>Website Markup</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 72%" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small>One Page</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 89%" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small>Mobile Template</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small>Backend API</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 66%" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 mb-3">
                  <div class="card h-100">
                    <div class="card-body">
                      <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2">assignment</i>Project Status</h6>
                      <small>Web Design</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small>Website Markup</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 72%" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small>One Page</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 89%" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small>Mobile Template</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small>Backend API</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 66%" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>



            </div>
          </div>

        </div>
    </div>
        </div>
    </div>
@endsection


