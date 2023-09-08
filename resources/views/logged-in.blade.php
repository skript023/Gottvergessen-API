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

            <div class="form-row mt-4">
                <div class="form-group mb-0 col-6">
                    <a href="/dashboard/statistic" class="btn btn-light btn-block"><i class="fa fa-home"></i> Home</a>
                </div>
                <div class="form-group mb-0 col-6 text-right">
                    <a href="/dashboard/profile" class="btn btn-light btn-block"><i class="fa fa-user-circle"></i> Profile</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection