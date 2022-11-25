@extends('includes.core')
@section('title'. 'Sign Up')
@section('content')

<div div class="card card-authentication1 mx-auto my-4">
	<div class="card-body">
	<div div class="card-content p-2">
		<div class="text-center">
			<img src="{{ asset('assets') }}/images/logo-icon.png" alt="logo icon">
		</div>
		<div class="card-title text-uppercase text-center py-3">Sign Up</div>
			<form action="/signup" method="post">
			@csrf
				<div class="form-group">
					<label for="exampleInputName" class="sr-only">Fullname</label>
					<div class="position-relative has-icon-right">
						<input type="text" name="fullname" id="exampleInputName" class="form-control input-shadow" placeholder="Enter Your Name" required>
						<div class="form-control-position">
							<i class="icon-user"></i>
						</div>
					</div>
				</div>
				<div class="form-group">
					<label for="exampleInputName" class="sr-only">Username</label>
					<div class="position-relative has-icon-right">
						<input type="text" name="username" id="exampleInputName" class="form-control input-shadow" placeholder="Enter Your Username" required>
						<div class="form-control-position">
							<i class="zmdi zmdi-account-circle"></i>
						</div>
					</div>
				</div>
				<div class="form-group">
					<label for="exampleInputEmailId" class="sr-only">Email ID</label>
					<div class="position-relative has-icon-right">
						<input type="text" name="email" id="exampleInputEmailId" class="form-control input-shadow" placeholder="Enter Your Email ID" required>
						<div class="form-control-position">
							<i class="icon-envelope-open"></i>
						</div>
					</div>
				</div>
				<div class="form-group">
				<label for="exampleInputPassword" class="sr-only">Password</label>
				<div class="position-relative has-icon-right">
					<input type="password" name="password" id="exampleInputPassword" class="form-control input-shadow" placeholder="Choose Password" required>
					<div class="form-control-position">
						<i class="icon-lock"></i>
					</div>
				</div>
				</div>
				
				<div class="form-group">
					<div class="icheck-material-white">
					<input type="checkbox" id="user-checkbox" checked="" name="agree" required>
					<label for="user-checkbox">I Agree With Terms & Conditions</label>
					</div>
				</div>
				
				<button type="submit" class="btn btn-light btn-block waves-effect waves-light">Sign Up</button>
				<div class="text-center mt-3">Sign Up With</div>
				
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
			<p class="text-warning mb-0">Already have an account? <a href="/"> Sign In here</a></p>
		</div>
</div>

@endsection