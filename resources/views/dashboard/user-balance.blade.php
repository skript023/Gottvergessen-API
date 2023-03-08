@extends('dashboard.includes.core')
@section('title', 'Balances Information')

@section('content')
<div class="card mt-3">
        <div class="card-content">
            <div class="row row-group m-0">
                <div class="col-12 col-lg-6 col-xl-3 border-light">
                    <div class="card-body">
                        <p class="mb-3 text-white small-font">E-Money Balance</p>
                        <h5 class="text-white mb-0">{{ $emoney }} <span class="float-right"><i class="fa fa-shopping-cart"></i></span></h5>
                        
                    </div>
                </div>
                <div class="col-12 col-lg-6 col-xl-3 border-light">
                    <div class="card-body">
                        <p class="mb-3 text-white small-font">Gopay Balance</p>
                        <h5 class="text-white mb-0">{{ $gopay }} <span class="float-right"><i class="fa fa-bar-chart"></i></span></h5>
                        
                    </div>
                </div>
                <div class="col-12 col-lg-6 col-xl-3 border-light">
                    <div class="card-body">
                        <p class="mb-3 text-white small-font">Bank Balance</p>
                        <h5 class="text-white mb-0">{{ $bank }} <span class="float-right"><i class="fa fa-cc-visa"></i></span></h5>
                        
                    </div>
                </div>
                <div class="col-12 col-lg-6 col-xl-3 border-light">
                    <div class="card-body">
                        <p class="mb-3 text-white small-font">Cash Balance</p>
                        <h5 class="text-white mb-0">{{ $cash }} <span class="float-right"><i class="fa fa-money"></i></span></h5>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection