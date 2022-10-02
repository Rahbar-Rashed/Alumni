@extends('layouts.app2')
@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"></h1>
    <!--<a href="" class="d-none d-sm-inline-block btn btn-primary shadow-sm">Add Book</a>-->
</div>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3 bg-primary">
        <h6 class="m-0 font-weight-bold text-white">Unapprove Members List
        @if(Auth::user()->role == 3)
        <a href="{{ URL::to('export/unapprove/member') }}" style="margin-top: 10px;" type="button" class="btn btn-success btn-sm float-right"><i class="fas fa-file-excel"></i> Download Excel</a>
        @endif
        </h6>
                               
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>SL</th>
                        <th>Full Name</th>
                        <th>Mobile Number</th>
                        <th>Pass Year</th>
                        <th>Tran Number</th>
                        <th>Tran Mode</th>
                        <th style="width: 110px;">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if($unapprove_members->isNotEmpty())
                    @foreach($unapprove_members as $key => $value)
                    <tr>
                        <td>{{ $key+1 }}</td>
                        <td>{{ $value->full_name }}</td>
                        <td>{{ $value->mobile_number }}</td>
                        <td>{{ $value->passing_year }}</td>
                        <td>{{ $value->account_transaction_number }}</td>
                        <td>{{ $value->payment_type }}</td>
                        <td class="action_btn">
                            <a href="{{ URL::to('view/member') }}/{{ $value->id }}" type="button"
                                class="btn btn-primary btn-sm">View</a>
                            <a href="{{ URL::to('approve/member') }}/{{ $value->id }}" type="button"
                                class="btn btn-success btn-sm">Approve</a>
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
                        <th>Email</th>

                        <th>Action</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>
@endsection