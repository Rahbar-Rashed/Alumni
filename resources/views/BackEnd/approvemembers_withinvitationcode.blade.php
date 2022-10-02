@extends('layouts.app2')
@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"></h1>
        <!--<a href="" class="d-none d-sm-inline-block btn btn-primary shadow-sm">Add Book</a>-->
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3 bg-primary">
            <h6 class="m-0 font-weight-bold text-white">Approve Members List <a href="{{ URL::to('export/member/code') }}" style="margin-top: 10px;"
                                type="button" class="btn btn-success btn-sm float-right"><i class="fas fa-file-excel"></i> Download Excel</a></h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr style="padding-right: 0px">
                        <th style="width: 19px;">SL</th>
                        <th style="width: 110px;">Full Name</th>
                        <th style="width: 87px;">Mobile Number</th>
                        <th style="width: 110px;">Invitation Code</th>
                        <th>Email</th>
                        <th style="width: 391px;">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if($approve_members->isNotEmpty())
                        @foreach($approve_members as $key => $value)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{ $value->full_name }}</td>
                                <td>{{ $value->mobile_number }}</td>
                                <td>{{ $value->invitation_code }}</td>
                                <td>{{ $value->email }}</td>
                                <td class="action_btn">
                                    <a href="{{ URL::to('view/member') }}/{{ $value->id }}" type="button" class="btn btn-primary btn-sm">View</a>
                                    @if($value->sms_status == 0)
                                        <button type="button" class="btn btn-sm btn-success" disabled>No Invite</button>
                                    @else
                                        <button type="button" class="btn btn-sm btn-danger" disabled>Invitated</button>
                                    @endif
                                    
                                    @if(Auth::user()->role == 3)
                            <a href="{{ URL::to('edit/member') }}/{{ $value->id }}" style="margin-top: 10px;"
                                type="button" class="btn btn-warning btn-sm">Edit</a>

                            <a href="{{ URL::to('delete/member') }}/{{ $value->id }}" style="margin-top: 10px;"
                                type="button" class="btn btn-danger btn-sm">Delete</a>                                
                            @endif
                                    
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <p>No Data found</p>
                    @endif
                    </tbody>
                    <thead>
                    <tr>
                       <th>SL</th>
                        <th>Full Name</th>
                        <th>Mobile Number</th>
                        <th>Invitation Code</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
@endsection


