@extends('dashboard.includes.core')
@section('title', 'Role Information')
@section('modal-header', 'Role Deletion')
@section('modal-message', 'Are you sure want to delete this role? the data will not be able to restored after deletion')
@section('content')

<div class="container">
    <div class="row">
        <div class="card col-md-4 mx-auto my-4">
            <div class="card-content p-2">
                <div class="card-body">
                    <div class="card-title text-uppercase text-center py-3">Add Role</div>
                    <form action="/dashboard/role/add" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="input-6" class="text-center">Role</label>
                            <input type="text" name="role" class="form-control form-control-rounded text-center" id="input-6" placeholder="Enter Role Name" required>
                        </div>
                        
                        <div class="form-group">
                            <button type="submit" class="btn btn-light btn-round px-5 mx-auto d-block"><i class="icon-lock"></i> Add Role</button>
                        </div>
                    </form>
                    @isset(request()->edit)
                        @include('dashboard.roles.edit')
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
                       <th>Role Name</th>
                       <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($roles as $role)
                            <tr>
                                <td>{{$role->role}}</td>
                                <td>
                                    <a href="/dashboard/role?edit={{$role->id}}" class="btn btn-light">Update</a>
                                    <button type="button" data-toggle="modal" data-target="#confirmation-modal" class="btn btn-light">Delete</button>
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
@section('action')
    <a href="/dashboard/role/delete/{{$role->id}}" type="button" class="btn btn-success">Ok</a>
@endsection