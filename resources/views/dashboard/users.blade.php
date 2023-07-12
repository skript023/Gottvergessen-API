@extends('dashboard.includes.core')
@section('title', 'User Management')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            @switch(request()->page)
                @case ('add')
                    @include('dashboard.users.add')
                @break
                
                @case ('edit')
                    @include('dashboard.users.edit')
                @break
                
                @default
                    @include( 'dashboard.users.view')
                @break
            @endswitch
        </div>
    </div>
</div>
@endsection