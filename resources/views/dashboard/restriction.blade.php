@extends('dashboard.includes.core')
@section('title', 'User Management')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            @switch(request()->page)
                @case ('add')
                    @include('dashboard.restrictions.add')
                @break
                
                @case ('edit')
                    @include('dashboard.restrictions.edit')
                @break
                
                @default
                    @include( 'dashboard.restrictions.view')
                @break
            @endswitch
        </div>
    </div>
</div>
@endsection