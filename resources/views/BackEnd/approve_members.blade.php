@extends('layouts.app2')
@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"></h1>
        <!--<a href="" class="d-none d-sm-inline-block btn btn-primary shadow-sm">Add Book</a>-->
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3 bg-primary">
            <h6 class="m-0 font-weight-bold text-white">Approve Members List
            @if (Auth::user()->role == 3)
            <a href="{{ URL::to('export/approve/member') }}" style="margin-top: 10px;" type="button" class="btn btn-success btn-sm float-right"><i class="fas fa-file-excel"></i> Download Excel</a>
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
                        <th>Email</th>

                        <th width: 40%;>Action</th>
                    </tr>
                    </thead>
                    <tbody>

                    @if($approve_members->isNotEmpty())
                        @foreach($approve_members as $key => $value)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{ $value->full_name }}</td>
                                <td>{{ $value->mobile_number }}</td>
                                <td>{{ $value->email }}</td>
                                <td class="action_btn">
                                    <a href="{{ URL::to('view/member') }}/{{ $value->id }}" type="button" class="btn btn-primary btn-sm">View</a>
                                    <a href="{{ URL::to('unapprove/member') }}/{{ $value->id }}" type="button" class="btn btn-info btn-sm">Unapprove</a>
                                    <a href="{{ URL::to('generate/invitecode') }}/{{ $value->id }}" style="margin-top: 10px;" class="btn btn-success btn-sm" target="_blank">Invite Code</a>
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


