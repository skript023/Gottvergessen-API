@extends('dashboard.includes.core')
@section('title', 'Ownerships Information')
@section('content')

@include('components.modal-popup')
<div class="container">
    <div class="row">
        <div class="card col-md-4 mx-auto my-4">
            <div class="card-content p-2">
                <div class="card-body">
                    <div class="card-title text-uppercase text-center py-3">Add Ownership</div>
                    <form action="/dashboard/role/add" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="input-6" class="text-center">Ownerships</label>
                            <input type="text" name="role" class="form-control form-control-rounded text-center" id="input-6" placeholder="Enter Ownership Name" required>
                        </div>
                        
                        <div class="form-group">
                            <button type="submit" class="btn btn-light btn-round px-5 mx-auto d-block"><i class="icon-lock"></i> Add Ownership</button>
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
                    <div class="card-title text-uppercase text-center py-3">List Ownerships</div>
                    <table class="table table-boardered">
                        <thead>
                        <tr>
                       <th>Ownerships</th>
                       <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($ownerships as $ownership)
                            <tr>
                                <td>{{$ownership->ownership}}</td>
                                <td>
                                    <a href="/dashboard/ownership?edit={{$ownership->id}}" class="btn btn-light">Update</a>
                                    <button type="button" data-toggle="modal" data-target="#exampleModalCenter" class="btn btn-light">Delete</button>
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