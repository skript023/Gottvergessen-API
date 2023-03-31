@extends('dashboard.includes.core')
@section('title', 'Access Level Control')
@section('modal-header', 'Role Deletion')
@section('modal-message', 'Are you sure want to delete this level? the data will not be able to restored after deletion')
@section('content')
@include('components.modal-popup', [
    'data' => $levels, 
    'url' => '/dashboard/access/delete/',
    'tag' => 'access-delete-'
])
<div class="container">
    <div class="row">
        <div class="card col-md-4 mx-auto my-4">
            <div class="card-content p-2">
                <div class="card-body">
                    <div class="card-title text-uppercase text-center py-3">Add Role</div>
                    <form action="/dashboard/access/add" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="input-6" class="text-center">Access Level</label>
                            <input type="text" name="level" class="form-control form-control-rounded text-center" id="input-6" placeholder="Enter Level Name" required>
                        </div>
                        
                        <div class="form-group">
                            <button type="submit" class="btn btn-light btn-round px-5 mx-auto d-block"><i class="icon-lock"></i> Add Access Level</button>
                        </div>
                    </form>
                    @isset(request()->edit)
                        @include('dashboard.access_level.edit')
                    @endisset
                </div>
            </div>
        </div>

        <div class="card col-md-6 mx-auto my-4">
            <div class="card-content p-2">
                <div class="card-body">
                    <div class="card-title text-uppercase text-center py-3">List Role</div>
                    <table class="table table-boardered">
                        <thead>
                        <tr>
                       <th>Access Level</th>
                       <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($levels as $level)
                            <tr>
                                <td>{{$level->name}}</td>
                                <td>
                                    <a href="/dashboard/access?edit={{$level->id}}" class="btn btn-light">Update</a>
                                    <button type="button" data-toggle="modal" data-target="#access-delete-{{ $level->id }}" class="btn btn-light">Delete</button>
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