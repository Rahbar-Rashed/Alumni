@extends('layouts.app2')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-info">
                <div class="card-header bg-primary text-white">Add New Books</div>
                  <div class="card-body">
                      <form method="post" action="{{ route('to.verify') }}">
                          @csrf
                        <div class="form-group">
                            <label>Transaction Id</label>
                            <input type="text" name="BkashTransactionId" class="form-control">
                            <input type="hidden" name="member_id" value="{{ $id }}">
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
{{--{!! Form::open(['url' => "/unit/$data->id",'method'=>'PUT']) !!}--}}
