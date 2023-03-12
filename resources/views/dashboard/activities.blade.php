@extends('dashboard.includes.core')
@section('title', 'Neuron Activities')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            @switch(request()->page)
                @case ('add')
                    @include('dashboard.activities.add')
                @break

                @case ('edit')
                    @include('dashboard.activities.edit')
                @break
                
                @default
                    @include( 'dashboard.activities.view')
                @break
            @endswitch
        </div>
    </div>
</div>
@endsection