@extends('includes.core')
@section('title', 'Login')
@section('content')
<div class="card card-authentication1 mx-auto my-5">
            <div class="card-body">
            <div class="card-content p-2">
            <div class="text-center">
                <img src="{{asset('assets')}}/images/logo-icon.png" alt="logo icon">
            </div>
            <div class="card-title text-uppercase text-center py-3">Sign In</div>
            <form action="/login" method="post">
                @csrf
                <div class="form-group">
                    <label for="exampleInputUsername" class="sr-only">Username</label>
                    <div class="position-relative has-icon-right">
                        <input type="text" name="username" id="exampleInputUsername" class="form-control input-shadow" placeholder="Enter Username" required>
                        <div class="form-control-position">
                            <i class="icon-user"></i>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword" class="sr-only">Password</label>
                    <div class="position-relative has-icon-right">
                        <input type="password" name="password" id="exampleInputPassword" class="form-control input-shadow" placeholder="Enter Password" required>
                        <div class="form-control-position">
                            <i class="icon-lock"></i>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-6">
                        <div class="icheck-material-white">
                            <input type="checkbox" id="user-checkbox" checked="" name="remember">
                            <label for="user-checkbox">Remember me</label>
                        </div>
                    </div>
                    <div class="form-group col-6 text-right">
                        <a href="reset-password.html">Reset Password</a>
                    </div>
                </div>
                <button type="submit" class="btn btn-light btn-block">Sign In</button>
                <div class="text-center mt-3">Sign In With</div>
                
                <div class="form-row mt-4">
                    <div class="form-group mb-0 col-6">
                        <button type="button" class="btn btn-light btn-block"><i class="fa fa-facebook-square"></i> Facebook</button>
                    </div>
                    <div class="form-group mb-0 col-6 text-right">
                        <button type="button" class="btn btn-light btn-block"><i class="fa fa-twitter-square"></i> Twitter</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
        <div class="card-footer text-center py-3">
            <p class="text-warning mb-0">Do not have an account? <a href="/register"> Sign Up here</a></p>
        </div>
</div>
@endsection