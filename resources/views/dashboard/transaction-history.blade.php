@extends('dashboard.includes.core')
@section('title', 'Transactions History')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            @switch(request()->page)
                @case ('add')
                    @include('dashboard.transactions.add')
                @break
                
                @case ('edit')
                    @include('dashboard.transactions.edit')
                @break
                
                @default
                    @include( 'dashboard.transactions.view')
                @break
            @endswitch
        </div>
    </div>
</div>
@endsection