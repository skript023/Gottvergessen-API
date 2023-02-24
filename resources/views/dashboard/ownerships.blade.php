@extends('dashboard.includes.core')
@section('modal-header', 'Are you sure want to delete the ownership?')
@section('modal-message', 'Are you sure want to delete this ownership? the data will not be able to restored after deletion')
@section('title', 'Ownerships Information')

@section('content')
@include('components.modal-popup', [
    'data' => $ownerships, 
    'url' => '/dashboard/ownership/delete/',
    'tag' => 'product-delete-'
])
<div class="container">
    <div class="row">
        <div class="card col-md-4 mx-auto my-4">
            <div class="card-content p-2">
                <div class="card-body">
                    <div class="card-title text-uppercase text-center py-3">Add Product</div>
                    <form action="/dashboard/role/add" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="input-6" class="text-center">Products</label>
                            <input type="text" name="role" class="form-control form-control-rounded text-center" id="input-6" placeholder="Enter Product Name" required>
                        </div>
                        
                        <div class="form-group">
                            <button type="submit" class="btn btn-light btn-round px-5 mx-auto d-block"><i class="icon-lock"></i> Add Product</button>
                        </div>
                    </form>
                    @isset(request()->edit)
                        @include('dashboard.ownerships.edit')
                    @endisset
                </div>
            </div>
        </div>

        <div class="card col-md-6 mx-auto my-4">
            <div class="card-content p-2">
                <div class="card-body">
                    <div class="card-title text-uppercase text-center py-3">Existed Products</div>
                    <table class="table table-boardered">
                        <thead>
                        <tr>
                       <th>Products</th>
                       <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($ownerships as $ownership)
                            <tr>
                                <td>{{$ownership->type}}</td>
                                <td>
                                    <a href="/dashboard/ownership?edit={{$ownership->id}}" class="btn btn-light">Update</a>
                                    <button type="button" data-toggle="modal" data-target="#product-delete-{{ $ownership->id }}" class="btn btn-light">Delete</button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection