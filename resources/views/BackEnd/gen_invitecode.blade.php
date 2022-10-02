@extends('layouts.app2')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-info">
                <div class="card-header bg-primary text-white">Generate Invite Code</div>
                  <div class="card-body">
                      <form method="post" action="{{ route('gen.invitecode',$id) }}">
                          @csrf
                        <div class="form-group">
                            <label>Invite Code No</label>
                            <input type="hidden" name="last_code" value="{{ $invite_code }}">
                            <input type="text" value="FPI-50{{ $batch_no }}{{ $invite_code }}" name="invitation_code" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection