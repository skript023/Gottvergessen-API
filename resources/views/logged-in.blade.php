@extends('includes.core')
@section('title', 'Login')
@section('content')
<div class="card card-authentication1 mx-auto my-5">
    <div class="card-body">
        <div class="card-content p-2">
            <div class="text-center">
                <img src="{{asset('assets')}}/images/logo-icon.png" alt="logo icon">
            </div>
            @isset ($user->image)
                <img src="{{ asset('storage/uploads/avatar') . '/' . $user->image }}" class="rounded-circle img-thumbnail mx-auto my-5 d-block" id="profile-img" alt="profile-img" style="width:300px;height:300px;object-fit:cover">
            @else
                <img src="https://via.placeholder.com/400x400" class="rounded-circle img-thumbnail mx-auto my-5 d-block" id="profile-img" alt="" style="width:300px;height:300px;object-fit:cover">
            @endif

            <div class="text-center mt-3"><a href="/dashboard/profile">{{ $user->fullname }}</a></div>
            <p>Status : <span class="badge badge-primary">{{ $user->status == 'verified' ? 'Active' : ($user->status == 'suspended' ? 'Suspended' : 'Unverified') }}</span></p>
            
            <div class="form-row mt-4">
                <div class="form-group mb-3 col-6">
                    <a href="/dashboard/statistic" class="btn btn-light btn-block"><i class="fa fa-home"></i> Home</a>
                </div>
                <div class="form-group mb-3 col-6 text-right">
                    <a href="/dashboard/profile" class="btn btn-light btn-block"><i class="fa fa-user-circle"></i> Profile</a>
                </div>
            </div>

            <a href="/logout" class="btn btn-light btn-block mb-0">Logout</a>
            
        </div>
    </div>
</div>
@endsection