@extends('layouts.app2')
@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    </div>
    
    <div class="row">
        <div class="col-xl-3 col-md-6 mb-3">
            <div class="card border-left-success shadow h-100 py-2" style="background: #969fbb">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-uppercase mb-1 text-center" style="color: black;">Total Registration</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800 text-center">{{ $total_registration }}
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-xl-3 col-md-6 mb-3">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div
                                    class="text-xs font-weight-bold text-success text-uppercase mb-1 text-center"
                                >
                                    Total Approve Members
                                </div>
                                <div
                                    class="h5 mb-0 font-weight-bold text-gray-800 text-center"
                                >
                                    {{ $total_approve }}
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-3">
                <div class="card border-left-success shadow h-100 py-2" style="background: #969fbb">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-uppercase mb-1 text-center" style="color: black">Total UnApprove Members</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800 text-center">{{ $total_unapprove }}
                                </div>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div
                                    class="text-xs font-weight-bold text-success text-uppercase mb-1 text-center"
                                >
                                    Total Approve Members With Code
                                </div>
                                <div
                                    class="h5 mb-0 font-weight-bold text-gray-800 text-center"
                                >
                                    {{ $approve_invite }}
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        
    <div class="row">
         <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                   
                        <div class="row no-gutters align-items-center" style="background: #bce9ef">
                            
                <div class="card-body" style="color:black">
                <h4 style="margin-top: 5px;">Batch Wise Registration</h4>
                <hr>
                   <div class="row">
                    <div class="col-sm-9">
                      <h6 class="mb-0">Registration Batch 1966</h6>
                    </div>
                    <div class="col-sm-3">
                     {{ $num_of_registration[1966] }} <a href="{{ URL::to('export/batch/member',1966) }}" style="margin-top: 5px;font-size: 1px;" type="" class="float-right"><i class="fas fa-download" style="font-size: 13px;color: black"></i></a>
                    </div>
                  </div>
                   <div class="row">
                    <div class="col-sm-9">
                      <h6 class="mb-0">Registration Batch 1967</h6>
                    </div>
                    <div class="col-sm-3">
                     {{ $num_of_registration[1967] }} <a href="{{ URL::to('export/batch/member',1967) }}" style="margin-top: 5px;font-size: 1px;" type="" class="float-right"><i class="fas fa-download" style="font-size: 13px;color: black"></i></a>
                    </div>
                  </div>
                   <div class="row">
                    <div class="col-sm-9">
                      <h6 class="mb-0">Registration Batch 1968</h6>
                    </div>
                    <div class="col-sm-3">
                     {{ $num_of_registration[1968] }} <a href="{{ URL::to('export/batch/member',1968) }}" style="margin-top: 5px;font-size: 1px;" type="" class="float-right"><i class="fas fa-download" style="font-size: 13px;color: black"></i></a>
                    </div> 
                  </div>
                   <div class="row">
                    <div class="col-sm-9">
                      <h6 class="mb-0">Registration Batch 1969</h6>
                    </div>
                    <div class="col-sm-3">
                     {{ $num_of_registration[1969] }} <a href="{{ URL::to('export/batch/member',1969) }}" style="margin-top: 5px;font-size: 1px;" type="" class="float-right"><i class="fas fa-download" style="font-size: 13px;color: black"></i></a>
                    </div>
                  </div>
                   <div class="row">
                    <div class="col-sm-9">
                      <h6 class="mb-0">Registration Batch 1970</h6>
                    </div>
                    <div class="col-sm-3">
                     {{ $num_of_registration[1970] }} <a href="{{ URL::to('export/batch/member',1970) }}" style="margin-top: 5px;font-size: 1px;" type="" class="float-right"><i class="fas fa-download" style="font-size: 13px;color: black"></i></a>
                    </div>
                  </div>
                   <div class="row">
                    <div class="col-sm-9">
                      <h6 class="mb-0">Registration Batch 1971</h6>
                    </div>
                    <div class="col-sm-3">
                     {{ $num_of_registration[1971] }} <a href="{{ URL::to('export/batch/member',1971) }}" style="margin-top: 5px;font-size: 1px;" type="" class="float-right"><i class="fas fa-download" style="font-size: 13px;color: black"></i></a>
                    </div>
                  </div>
                   <div class="row">
                    <div class="col-sm-9">
                      <h6 class="mb-0">Registration Batch 1972</h6>
                    </div>
                    <div class="col-sm-3">
                     {{ $num_of_registration[1972] }} <a href="{{ URL::to('export/batch/member',1972) }}" style="margin-top: 5px;font-size: 1px;" type="" class="float-right"><i class="fas fa-download" style="font-size: 13px;color: black"></i></a>
                    </div>
                  </div>
                   <div class="row">
                    <div class="col-sm-9">
                      <h6 class="mb-0">Registration Batch 1973</h6>
                    </div>
                    <div class="col-sm-3">
                     {{ $num_of_registration[1973] }} <a href="{{ URL::to('export/batch/member',1973) }}" style="margin-top: 5px;font-size: 1px;" type="" class="float-right"><i class="fas fa-download" style="font-size: 13px;color: black"></i></a>
                    </div>
                  </div>
                   <div class="row">
                    <div class="col-sm-9">
                      <h6 class="mb-0">Registration Batch 1974</h6>
                    </div>
                    <div class="col-sm-3">
                     {{ $num_of_registration[1974] }} <a href="{{ URL::to('export/batch/member',1974) }}" style="margin-top: 5px;font-size: 1px;" type="" class="float-right"><i class="fas fa-download" style="font-size: 13px;color: black"></i></a>
                    </div>
                  </div>
                   <div class="row">
                    <div class="col-sm-9">
                      <h6 class="mb-0">Registration Batch 1975</h6>
                    </div>
                    <div class="col-sm-3">
                     {{ $num_of_registration[1975] }} <a href="{{ URL::to('export/batch/member',1975) }}" style="margin-top: 5px;font-size: 1px;" type="" class="float-right"><i class="fas fa-download" style="font-size: 13px;color: black"></i></a>
                    </div>
                  </div>
                   <div class="row">
                    <div class="col-sm-9">
                      <h6 class="mb-0">Registration Batch 1976</h6>
                    </div>
                    <div class="col-sm-3">
                     {{ $num_of_registration[1976] }} <a href="{{ URL::to('export/batch/member',1976) }}" style="margin-top: 5px;font-size: 1px;" type="" class="float-right"><i class="fas fa-download" style="font-size: 13px;color: black"></i></a>
                    </div>
                  </div>
                   <div class="row">
                    <div class="col-sm-9">
                      <h6 class="mb-0">Registration Batch 1977</h6>
                    </div>
                    <div class="col-sm-3">
                     {{ $num_of_registration[1977] }} <a href="{{ URL::to('export/batch/member',1977) }}" style="margin-top: 5px;font-size: 1px;" type="" class="float-right"><i class="fas fa-download" style="font-size: 13px;color: black"></i></a>
                    </div>
                  </div>
                   <div class="row">
                    <div class="col-sm-9">
                      <h6 class="mb-0">Registration Batch 1978</h6>
                    </div>
                    <div class="col-sm-3">
                     {{ $num_of_registration[1978] }} <a href="{{ URL::to('export/batch/member',1978) }}" style="margin-top: 5px;font-size: 1px;" type="" class="float-right"><i class="fas fa-download" style="font-size: 13px;color: black"></i></a>
                    </div>
                  </div>
                   <div class="row">
                    <div class="col-sm-9">
                      <h6 class="mb-0">Registration Batch 1979</h6>
                    </div>
                    <div class="col-sm-3">
                     {{ $num_of_registration[1979] }} <a href="{{ URL::to('export/batch/member',1979) }}" style="margin-top: 5px;font-size: 1px;" type="" class="float-right"><i class="fas fa-download" style="font-size: 13px;color: black"></i></a>
                    </div>
                  </div>
                </div>
           
        </div>

</div>
</div>
        <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                   
                        <div class="row no-gutters align-items-center" style="background: #b3f7de">
                            
                <div class="card-body" style="color:black">
                <h4 style="margin-top: 5px;">Batch Wise Registration</h4>
                <hr>
                   <div class="row">
                    <div class="col-sm-9">
                      <h6 class="mb-0">Registration Batch 1980</h6>
                    </div>
                    <div class="col-sm-3">
                     {{ $num_of_registration[1980] }} <a href="{{ URL::to('export/batch/member',1980) }}" style="margin-top: 5px;font-size: 1px;" type="" class="float-right"><i class="fas fa-download" style="font-size: 13px;color: black"></i></a>
                    </div>
                  </div>
                   <div class="row">
                    <div class="col-sm-9">
                      <h6 class="mb-0">Registration Batch 1981</h6>
                    </div>
                    <div class="col-sm-3">
                     {{ $num_of_registration[1981] }} <a href="{{ URL::to('export/batch/member',1981) }}" style="margin-top: 5px;font-size: 1px;" type="" class="float-right"><i class="fas fa-download" style="font-size: 13px;color: black"></i></a>
                    </div>
                  </div>
                   <div class="row">
                    <div class="col-sm-9">
                      <h6 class="mb-0">Registration Batch 1982</h6>
                    </div>
                    <div class="col-sm-3">
                     {{ $num_of_registration[1982] }} <a href="{{ URL::to('export/batch/member',1982) }}" style="margin-top: 5px;font-size: 1px;" type="" class="float-right"><i class="fas fa-download" style="font-size: 13px;color: black"></i></a>
                    </div>
                  </div>
                   <div class="row">
                    <div class="col-sm-9">
                      <h6 class="mb-0">Registration Batch 1983</h6>
                    </div>
                    <div class="col-sm-3">
                     {{ $num_of_registration[1983] }} <a href="{{ URL::to('export/batch/member',1983) }}" style="margin-top: 5px;font-size: 1px;" type="" class="float-right"><i class="fas fa-download" style="font-size: 13px;color: black"></i></a>
                    </div>
                  </div>
                   <div class="row">
                    <div class="col-sm-9">
                      <h6 class="mb-0">Registration Batch 1984</h6>
                    </div>
                    <div class="col-sm-3">
                     {{ $num_of_registration[1984] }} <a href="{{ URL::to('export/batch/member',1984) }}" style="margin-top: 5px;font-size: 1px;" type="" class="float-right"><i class="fas fa-download" style="font-size: 13px;color: black"></i></a>
                    </div>
                  </div>
                   <div class="row">
                    <div class="col-sm-9">
                      <h6 class="mb-0">Registration Batch 1985</h6>
                    </div>
                    <div class="col-sm-3">
                     {{ $num_of_registration[1985] }} <a href="{{ URL::to('export/batch/member',1985) }}" style="margin-top: 5px;font-size: 1px;" type="" class="float-right"><i class="fas fa-download" style="font-size: 13px;color: black"></i></a>
                    </div>
                  </div>
                   <div class="row">
                    <div class="col-sm-9">
                      <h6 class="mb-0">Registration Batch 1986</h6>
                    </div>
                    <div class="col-sm-3">
                     {{ $num_of_registration[1986] }} <a href="{{ URL::to('export/batch/member',1986) }}" style="margin-top: 5px;font-size: 1px;" type="" class="float-right"><i class="fas fa-download" style="font-size: 13px;color: black"></i></a>
                    </div>
                  </div>
                   <div class="row">
                    <div class="col-sm-9">
                      <h6 class="mb-0">Registration Batch 1987</h6>
                    </div>
                    <div class="col-sm-3">
                     {{ $num_of_registration[1987] }} <a href="{{ URL::to('export/batch/member',1987) }}" style="margin-top: 5px;font-size: 1px;" type="" class="float-right"><i class="fas fa-download" style="font-size: 13px;color: black"></i></a>
                    </div>
                  </div>
                   <div class="row">
                    <div class="col-sm-9">
                      <h6 class="mb-0">Registration Batch 1988</h6>
                    </div>
                    <div class="col-sm-3">
                     {{ $num_of_registration[1988] }} <a href="{{ URL::to('export/batch/member',1988) }}" style="margin-top: 5px;font-size: 1px;" type="" class="float-right"><i class="fas fa-download" style="font-size: 13px;color: black"></i></a>
                    </div>
                    
                  </div>
                   <div class="row">
                    <div class="col-sm-9">
                      <h6 class="mb-0">Registration Batch 1989</h6>
                    </div>
                    <div class="col-sm-3">
                     {{ $num_of_registration[1989] }} <a href="{{ URL::to('export/batch/member',1989) }}" style="margin-top: 5px;font-size: 1px;" type="" class="float-right"><i class="fas fa-download" style="font-size: 13px;color: black"></i></a>
                    </div>
                  </div>
                   <div class="row">
                    <div class="col-sm-9">
                      <h6 class="mb-0">Registration Batch 1990</h6>
                    </div>
                    <div class="col-sm-3">
                     {{ $num_of_registration[1990] }} <a href="{{ URL::to('export/batch/member',1990) }}" style="margin-top: 5px;font-size: 1px;" type="" class="float-right"><i class="fas fa-download" style="font-size: 13px;color: black"></i></a>
                    </div>
                  </div>
                   <div class="row">
                    <div class="col-sm-9">
                      <h6 class="mb-0">Registration Batch 1991</h6>
                    </div>
                    <div class="col-sm-3">
                     {{ $num_of_registration[1991] }} <a href="{{ URL::to('export/batch/member',1991) }}" style="margin-top: 5px;font-size: 1px;" type="" class="float-right"><i class="fas fa-download" style="font-size: 13px;color: black"></i></a>
                    </div>
                  </div>
                   <div class="row">
                    <div class="col-sm-9">
                      <h6 class="mb-0">Registration Batch 1992</h6>
                    </div>
                    <div class="col-sm-3">
                     {{ $num_of_registration[1992] }} <a href="{{ URL::to('export/batch/member',1992) }}" style="margin-top: 5px;font-size: 1px;" type="" class="float-right"><i class="fas fa-download" style="font-size: 13px;color: black"></i></a>
                    </div>
                  </div>
                   <div class="row">
                    <div class="col-sm-9">
                      <h6 class="mb-0">Registration Batch 1993</h6>
                    </div>
                    <div class="col-sm-3">
                     {{ $num_of_registration[1993] }} <a href="{{ URL::to('export/batch/member',1993) }}" style="margin-top: 5px;font-size: 1px;" type="" class="float-right"><i class="fas fa-download" style="font-size: 13px;color: black"></i></a>
                    </div>
                  </div>
                </div>
           
        </div>

</div>
</div>
        <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                   
                        <div class="row no-gutters align-items-center" style="background: #c4cbc8">
                            
                <div class="card-body" style="color:black">
                <h5 style="margin-top: 5px;">Top 10 Batch (Registration Wise)</h5>
                <hr>
                   
                   <div class="row">
                    <ul style="list-style: none;">
                        @foreach($top_data as $key => $top)
                        
                      <li> {{ $key + 1 }}. {{ $top->passing_year }} ({{ $top->count }})</li>
                        @endforeach
                    </ul>
                  </div>
                   
                </div>
           
        </div>

</div>
</div>
</div> 

<div class="row">
    <div class="col-xl-4 col-md-4 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                   
                        <div class="row no-gutters align-items-center" style="background: #b3f7de">
                            
                <div class="card-body" style="color:black">
                <h4 style="margin-top: 5px;">Batch Wise Registratioin</h4>
                <hr>
                   <div class="row">
                    <div class="col-sm-9">
                      <h6 class="mb-0">Registration Batch 1994</h6>
                    </div>
                    <div class="col-sm-3">
                     {{ $num_of_registration[1994] }} <a href="{{ URL::to('export/batch/member',1994) }}" style="margin-top: 5px;font-size: 1px;" type="" class="float-right"><i class="fas fa-download" style="font-size: 13px;color: black"></i></a>
                    </div>
                  </div>
                   <div class="row">
                    <div class="col-sm-9">
                      <h6 class="mb-0">Registration Batch 1995</h6>
                    </div>
                    <div class="col-sm-3">
                     {{ $num_of_registration[1995] }} <a href="{{ URL::to('export/batch/member',1995) }}" style="margin-top: 5px;font-size: 1px;" type="" class="float-right"><i class="fas fa-download" style="font-size: 13px;color: black"></i></a>
                    </div>
                  </div>
                   <div class="row">
                    <div class="col-sm-9">
                      <h6 class="mb-0">Registration Batch 1996</h6>
                    </div>
                    <div class="col-sm-3">
                     {{ $num_of_registration[1996] }} <a href="{{ URL::to('export/batch/member',1996) }}" style="margin-top: 5px;font-size: 1px;" type="" class="float-right"><i class="fas fa-download" style="font-size: 13px;color: black"></i></a>
                    </div>
                  </div>
                   <div class="row">
                    <div class="col-sm-9">
                      <h6 class="mb-0">Registration Batch 1997</h6>
                    </div>
                    <div class="col-sm-3">
                     {{ $num_of_registration[1997] }} <a href="{{ URL::to('export/batch/member',1997) }}" style="margin-top: 5px;font-size: 1px;" type="" class="float-right"><i class="fas fa-download" style="font-size: 13px;color: black"></i></a>
                    </div>
                  </div>
                   <div class="row">
                    <div class="col-sm-9">
                      <h6 class="mb-0">Registration Batch 1998</h6>
                    </div>
                    <div class="col-sm-3">
                     {{ $num_of_registration[1998] }} <a href="{{ URL::to('export/batch/member',1998) }}" style="margin-top: 5px;font-size: 1px;" type="" class="float-right"><i class="fas fa-download" style="font-size: 13px;color: black"></i></a>
                    </div>
                  </div>
                   <div class="row">
                    <div class="col-sm-9">
                      <h6 class="mb-0">Registration Batch 1999</h6>
                    </div>
                    <div class="col-sm-3">
                     {{ $num_of_registration[1999] }} <a href="{{ URL::to('export/batch/member',1999) }}" style="margin-top: 5px;font-size: 1px;" type="" class="float-right"><i class="fas fa-download" style="font-size: 13px;color: black"></i></a>
                    </div>
                  </div>
                   <div class="row">
                    <div class="col-sm-9">
                      <h6 class="mb-0">Registration Batch 2000</h6>
                    </div>
                    <div class="col-sm-3">
                     {{ $num_of_registration[2000] }} <a href="{{ URL::to('export/batch/member',2000) }}" style="margin-top: 5px;font-size: 1px;" type="" class="float-right"><i class="fas fa-download" style="font-size: 13px;color: black"></i></a>
                    </div>
                  </div>
                   <div class="row">
                    <div class="col-sm-9">
                      <h6 class="mb-0">Registration Batch 2001</h6>
                    </div>
                    <div class="col-sm-3">
                     {{ $num_of_registration[2001] }} <a href="{{ URL::to('export/batch/member',2001) }}" style="margin-top: 5px;font-size: 1px;" type="" class="float-right"><i class="fas fa-download" style="font-size: 13px;color: black"></i></a>
                    </div>
                  </div>
                   <div class="row">
                    <div class="col-sm-9">
                      <h6 class="mb-0">Registration Batch 2002</h6>
                    </div>
                    <div class="col-sm-3">
                     {{ $num_of_registration[2002] }} <a href="{{ URL::to('export/batch/member',2002) }}" style="margin-top: 5px;font-size: 1px;" type="" class="float-right"><i class="fas fa-download" style="font-size: 13px;color: black"></i></a>
                    </div>
                  </div>
                   <div class="row">
                    <div class="col-sm-9">
                      <h6 class="mb-0">Registration Batch 2003</h6>
                    </div>
                    <div class="col-sm-3">
                     {{ $num_of_registration[2003] }} <a href="{{ URL::to('export/batch/member',2003) }}" style="margin-top: 5px;font-size: 1px;" type="" class="float-right"><i class="fas fa-download" style="font-size: 13px;color: black"></i></a>
                    </div>
                  </div>
                   <div class="row">
                    <div class="col-sm-9">
                      <h6 class="mb-0">Registration Batch 2004</h6>
                    </div>
                    <div class="col-sm-3">
                     {{ $num_of_registration[2004] }} <a href="{{ URL::to('export/batch/member',2004) }}" style="margin-top: 5px;font-size: 1px;" type="" class="float-right"><i class="fas fa-download" style="font-size: 13px;color: black"></i></a>
                    </div>
                  </div>
                   <div class="row">
                    <div class="col-sm-9">
                      <h6 class="mb-0">Registration Batch 2005</h6> 
                    </div>
                    <div class="col-sm-3">
                     {{ $num_of_registration[2005] }} <a href="{{ URL::to('export/batch/member',2005) }}" style="margin-top: 5px;font-size: 1px;" type="" class="float-right"><i class="fas fa-download" style="font-size: 13px;color: black"></i></a>
                    </div>
                  </div>
                   <div class="row">
                    <div class="col-sm-9">
                      <h6 class="mb-0">Registration Batch 2006</h6>
                    </div>
                    <div class="col-sm-3">
                     {{ $num_of_registration[2006] }} <a href="{{ URL::to('export/batch/member',2006) }}" style="margin-top: 5px;font-size: 1px;" type="" class="float-right"><i class="fas fa-download" style="font-size: 13px;color: black"></i></a>
                    </div>
                  </div>
                   <div class="row">
                    <div class="col-sm-9">
                      <h6 class="mb-0">Registration Batch 2007</h6>
                    </div>
                    <div class="col-sm-3">
                     {{ $num_of_registration[2007] }} <a href="{{ URL::to('export/batch/member',2007) }}" style="margin-top: 5px;font-size: 1px;" type="" class="float-right"><i class="fas fa-download" style="font-size: 13px;color: black"></i></a>
                    </div>
                  </div>
                </div>
           
        </div>

</div>
</div>
    <div class="col-xl-4 col-md-4 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                   
                        <div class="row no-gutters align-items-center" style="background: #bce9ef">
                            
                <div class="card-body" style="color:black">
                <h4 style="margin-top: 5px;">Batch Wise Registration</h4>
                <hr>
                   <div class="row">
                    <div class="col-sm-9">
                      <h6 class="mb-0">Registration Batch 2008</h6>
                    </div>
                    <div class="col-sm-3">
                     {{ $num_of_registration[2008] }} <a href="{{ URL::to('export/batch/member',2008) }}" style="margin-top: 5px;font-size: 1px;" type="" class="float-right"><i class="fas fa-download" style="font-size: 13px;color: black"></i></a>
                    </div>
                  </div>
                   <div class="row">
                    <div class="col-sm-9">
                      <h6 class="mb-0">Registration Batch 2009</h6>
                    </div>
                    <div class="col-sm-3">
                     {{ $num_of_registration[2009] }} <a href="{{ URL::to('export/batch/member',2009) }}" style="margin-top: 5px;font-size: 1px;" type="" class="float-right"><i class="fas fa-download" style="font-size: 13px;color: black"></i></a>
                    </div>
                  </div>
                   <div class="row">
                    <div class="col-sm-9">
                      <h6 class="mb-0">Registration Batch 2010</h6>
                    </div>
                    <div class="col-sm-3">
                     {{ $num_of_registration[2010] }} <a href="{{ URL::to('export/batch/member',2010) }}" style="margin-top: 5px;font-size: 1px;" type="" class="float-right"><i class="fas fa-download" style="font-size: 13px;color: black"></i></a>
                    </div>
                  </div>
                   <div class="row">
                    <div class="col-sm-9">
                      <h6 class="mb-0">Registration Batch 2011</h6>
                    </div>
                    <div class="col-sm-3">
                     {{ $num_of_registration[2011] }} <a href="{{ URL::to('export/batch/member',2011) }}" style="margin-top: 5px;font-size: 1px;" type="" class="float-right"><i class="fas fa-download" style="font-size: 13px;color: black"></i></a>
                    </div>
                  </div>
                   <div class="row">
                    <div class="col-sm-9">
                      <h6 class="mb-0">Registration Batch 2012</h6>
                    </div>
                    <div class="col-sm-3">
                     {{ $num_of_registration[2012] }} <a href="{{ URL::to('export/batch/member',2012) }}" style="margin-top: 5px;font-size: 1px;" type="" class="float-right"><i class="fas fa-download" style="font-size: 13px;color: black"></i></a>
                    </div>
                  </div>
                   <div class="row">
                    <div class="col-sm-9">
                      <h6 class="mb-0">Registration Batch 2013</h6>
                    </div>
                    <div class="col-sm-3">
                     {{ $num_of_registration[2013] }} <a href="{{ URL::to('export/batch/member',2013) }}" style="margin-top: 5px;font-size: 1px;" type="" class="float-right"><i class="fas fa-download" style="font-size: 13px;color: black"></i></a>
                    </div>
                  </div>
                   <div class="row">
                    <div class="col-sm-9">
                      <h6 class="mb-0">Registration Batch 2014</h6>
                    </div>
                    <div class="col-sm-3">
                     {{ $num_of_registration[2014] }} <a href="{{ URL::to('export/batch/member',2014) }}" style="margin-top: 5px;font-size: 1px;" type="" class="float-right"><i class="fas fa-download" style="font-size: 13px;color: black"></i></a>
                    </div>
                  </div>
                   <div class="row">
                    <div class="col-sm-9">
                      <h6 class="mb-0">Registration Batch 2015</h6>
                    </div>
                    <div class="col-sm-3">
                     {{ $num_of_registration[2015] }} <a href="{{ URL::to('export/batch/member',2015) }}" style="margin-top: 5px;font-size: 1px;" type="" class="float-right"><i class="fas fa-download" style="font-size: 13px;color: black"></i></a>
                    </div>
                  </div>
                   <div class="row">
                    <div class="col-sm-9">
                      <h6 class="mb-0">Registration Batch 2016</h6>
                    </div>
                    <div class="col-sm-3">
                     {{ $num_of_registration[2016] }} <a href="{{ URL::to('export/batch/member',2016) }}" style="margin-top: 5px;font-size: 1px;" type="" class="float-right"><i class="fas fa-download" style="font-size: 13px;color: black"></i></a>
                    </div>
                  </div>
                   <div class="row">
                    <div class="col-sm-9">
                      <h6 class="mb-0">Registration Batch 2017</h6>
                    </div>
                    <div class="col-sm-3">
                     {{ $num_of_registration[2017] }} <a href="{{ URL::to('export/batch/member',2017) }}" style="margin-top: 5px;font-size: 1px;" type="" class="float-right"><i class="fas fa-download" style="font-size: 13px;color: black"></i></a>
                    </div>
                  </div>
                   <div class="row">
                    <div class="col-sm-9">
                      <h6 class="mb-0">Registration Batch 2018</h6>
                    </div>
                    <div class="col-sm-3">
                     {{ $num_of_registration[2018] }} <a href="{{ URL::to('export/batch/member',2018) }}" style="margin-top: 5px;font-size: 1px;" type="" class="float-right"><i class="fas fa-download" style="font-size: 13px;color: black"></i></a>
                    </div>
                  </div>
                   <div class="row">
                    <div class="col-sm-9">
                      <h6 class="mb-0">Registration Batch 2019</h6>
                    </div>
                    <div class="col-sm-3">
                     {{ $num_of_registration[2019] }} <a href="{{ URL::to('export/batch/member',2019) }}" style="margin-top: 5px;font-size: 1px;" type="" class="float-right"><i class="fas fa-download" style="font-size: 13px;color: black"></i></a>
                    </div>
                  </div>
                   <div class="row">
                    <div class="col-sm-9">
                      <h6 class="mb-0">Registration Batch 2020</h6>
                    </div>
                    <div class="col-sm-3">
                     {{ $num_of_registration[2020] }} <a href="{{ URL::to('export/batch/member',2020) }}" style="margin-top: 5px;font-size: 1px;" type="" class="float-right"><i class="fas fa-download" style="font-size: 13px;color: black"></i></a>
                    </div>
                  </div>
                   <div class="row">
                    <div class="col-sm-9">
                      <h6 class="mb-0">Registration Batch 2021</h6>
                    </div>
                    <div class="col-sm-3">
                     {{ $num_of_registration[2021] }} <a href="{{ URL::to('export/batch/member',2021) }}" style="margin-top: 5px;font-size: 1px;" type="" class="float-right"><i class="fas fa-download" style="font-size: 13px;color: black"></i></a>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-9">
                      <h6 class="mb-0">Registration Batch 2022</h6>
                    </div>
                    <div class="col-sm-3">
                     {{ $num_of_registration[2022] }} <a href="{{ URL::to('export/batch/member',2022) }}" style="margin-top: 5px;font-size: 1px;" type="" class="float-right"><i class="fas fa-download" style="font-size: 13px;color: black"></i></a>
                    </div>
                  </div>
                </div>
           
        </div>

</div>
</div>
</div>
        
    
   <!--<div class="row gutters-sm">-->
   <!--     <div class="col-md-8">-->
   <!--          <div class="card mb-3">-->
   <!--             <div class="card-body">-->
   <!--                 <h4 style="margin-top: 5px;">Details Information</h4>-->
   <!--                 <div class="row">-->
   <!--                 <div class="col-sm-5">-->
   <!--                   <h6 class="mb-0">Full Name</h6>-->
   <!--                 </div>-->
   <!--                 <div class="col-sm-7 text-secondary">-->
   <!--                  MUNSI ABDUR RAKIB-->
   <!--                 </div>-->
   <!--               </div>-->
   <!--             </div>-->
   <!--         </div>-->
          
   <!--     </div>          -->
   <!-- </div>-->
@endsection
