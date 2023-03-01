@extends('dashboard.includes.core')
@section('title', 'Wallets Information')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            @switch(request()->page)
                @case ('add')
                    @include('dashboard.wallets.add')
                @break
                
                @case ('edit')
                    @include('dashboard.wallets.edit')
                @break
                
                @default
                    @include( 'dashboard.wallets.view')
                @break
            @endswitch
        </div>
    </div>
</div>
@endsection