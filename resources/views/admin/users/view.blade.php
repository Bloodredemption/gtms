@extends('layout')

@section('content-wrapper')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 mb-4">
                <div class="row">
                    <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                        <div class="row align-items-center">
                            <div class="col-auto">
                                <h3 class="font-weight-bold">View User</h3>
                            </div>
                            <a href="/users">&#8592; Back</a>
                        </div>
                        <h6 class="font-weight-normal mb-0">User Information.</h6>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="col-xs-12 col-sm-12">
                            <strong>Name:</strong>
                            {{ $user->name }} <i>({{ $user->user_type }})</i>
                        </div>
                        <div class="col-xs-12 col-sm-12">
                            <strong>Email:</strong>
                            {{ $user->email }}
                        </div>
                        <div class="col-xs-12 col-sm-12">
                            <strong>Contact No.:</strong>
                            {{ $user->contact_no }}
                        </div>
                        <div class="col-xs-12 col-sm-12">
                            <strong>Created At:</strong>
                            {{ $user->created_at->format('F j, Y | h:i A') }}
                        </div>
                        <div class="col-xs-12 col-sm-12">
                            <strong>Status:</strong>
                            @if($user->status == '1')
                                <div class="badge badge-primary">Active</div>
                            @elseif($user->status == '0')
                                <div class="badge badge-danger">Inactive</div>
                            @endif
                        </div>
                        <div class="col-xs-12 col-sm-12 mt-3">
                            <form action="{{ route('users.destroy',$user->id) }}" method="POST">
                                <a class="btnedit" style="color: blue;" href="{{ route('users.edit',$user->id) }}" title="Edit">
                                    <i class="ti-pencil btn-icon-prepend"></i> Edit
                                </a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btnedit" style="color: red;"><i class="ti-trash btn-icon-prepend"></i> Remove</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection