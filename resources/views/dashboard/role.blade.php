@extends('dashboard.includes.core')
@section('title', 'Role Information')
@section('content')

<div class="container">
    <div class="row">
        <div class="card col-md-4 mx-auto my-4">
            <div class="card-content p-2">
                <div class="card-body">
                    <div class="card-title text-uppercase text-center py-3">Add Role</div>
                    <form action="/dashboard/users/add" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="input-6" class="text-center">Role</label>
                            <input type="text" name="role" class="form-control form-control-rounded" id="input-6" placeholder="Enter Fullname" required>
                        </div>
                        
                        <div class="form-group">
                            <button type="submit" class="btn btn-light btn-round px-5 mx-auto d-block"><i class="icon-lock"></i>Add Account</button>
                        </div>
                    </form>
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
                       <th>Category Name</th>
                       <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($roles as $role)
                            <tr>
                                <td>{{$role->role}}</td>
                                <td>
                                    <a href="/dashboard/role/edit/{{$role->id}}" class="btn btn-warning">Update</a>
                                    <a href="/dashboard/role/delete/{{$role->id}}" class="btn btn-danger">Delete</a>
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