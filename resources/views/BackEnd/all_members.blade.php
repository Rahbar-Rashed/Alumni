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
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>SL</th>
                        <th>Full Name</th>
                        <th>Mobile Number</th>
                        <th>Email</th>

                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>

                    @if($all_members->isNotEmpty())
                        @foreach($all_members as $key => $value)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{ $value->full_name }}</td>
                                <td>{{ $value->mobile_number }}</td>
                                <td>{{ $value->email }}</td>

                                <td class="action_btn">

                                    <button class="btn btn-danger btn-circle btn-sm">
                                        <i class="fas fa-trash"></i>
                                    </button>

                                    <a href="{{ URL::to('edit/member') }}/{{ $value->id }}" class="btn btn-success btn-circle btn-sm">
                                        <i class="fas fa-edit"></i>
                                    </a>

                                    <!-- <button class="btn btn-primary btn-circle btn-sm">
                                        <i class="fas fa-edit"></i>
                                    </button> -->
                                    <!--<a href="" class="btn btn-success btn-circle btn-sm">-->
                                    <!--    <i class="fas fa-check"></i>-->
                                    <!--</a>-->
                                    
                                    <a href="{{ URL::to('view/member') }}/{{ $value->id }}" class="btn btn-primary btn-circle btn-sm">
                                        <i class="fas fa-eye"></i>
                                    </a>
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


