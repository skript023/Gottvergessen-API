@extends('dashboard.includes.core')
@section('title', 'Binary Information')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            @switch(request()->page)
                @case ('add')
                    @include('dashboard.bin.add')
                @break
                
                @case ('edit')
                    @include('dashboard.bin.edit')
                @break
                
                @default
                    @include( 'dashboard.bin.view')
                @break
            @endswitch
        </div>
    </div>
</div>
@endsection