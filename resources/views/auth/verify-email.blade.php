@extends('includes.core')
@section('title'. 'Activation')
@section('content')
<div class="card card-authentication1 mx-auto my-5">
    <div class="card-body">
        <div class="card-content p-2">
            <body>
                <p>
                    Dear Customer,
                    
                    Thanks for getting started with our Service!
                    We need a little more information to complete your registration, including a confirmation of your email address.
                    Click below to confirm your email address:
                    
                    <form action="/email/verification-notification" method="post">
                        @csrf
                        <input type="submit" class="btn btn-primary" value="Link">
                    </form>
                    
                    If you have problems, please paste the above URL into your web browser.</p>
            </body>
        </div>
    </div>
</div>
@endsection