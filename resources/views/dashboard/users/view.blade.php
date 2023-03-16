@extends('includes.core')
@section('title', 'Users')
@section('modal-header', 'User Deletion')
@section('modal-message', 'Are you sure want to delete this user? the data will not be able to restored after deletion')
@section('content')

@include('components.modal-popup', [
    'data' => $users, 
    'url' => 'users/suspend/',
    'tag' => 'user-suspend-'
])
@include('components.modal-popup', [
    'data' => $users, 
    'url' => 'users/delete/',
    'tag' => 'user-delete-'
])
<div class="col-lg-12">
    <div class="my-4">
        <a class="btn btn-light zmdi zmdi-account-add" href="users?page=add"> Add Account</a>
    </div>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title text-center">Users List</h5>
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Fullname</th>
                        <th scope="col">Ownership</th>
                        <th scope="col">Computer</th>
                        <th scope="col">Role</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <th scope="row">{{ $loop->index + 1 }}</th>
                                <td>{{ $user->fullname }}</td>
                                <td>{{ $user->ownerships->type }}</td>
                                <td>{{ $user->computer_name }}</td>
                                <td>{{ $user->roles->name }}</td>
                                <td>{{ $user->activity }}</td>
                                <td>
                                <div class="btn-group">
                                <button type="button" class="btn btn-light btn-block waves-effect waves-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Action
                                </button>
                                <ul class="dropdown-menu dropdown-menu-right bg-dark-light">
                                    <li class="dropdown-divider"></li>
                                    <a href="{{ auth()->user()->level <= 4 ? 'users?page=edit&user='.$user->id : 'javascript:void();' }}"><li class="dropdown-item {{ auth()->user()->level > 4 ? 'disabled' : '' }}">Edit User</li></a>
                                    <li class="dropdown-divider"></li>
                                    <a data-toggle="modal" data-target="{{ auth()->user()->level <= 3 ? '#user-delete-'.$user->id : 'javascript:void();' }}"><li class="dropdown-item {{ auth()->user()->level > 3 ? 'disabled' : '' }}">Delete User</li></a>
                                    <li class="dropdown-divider"></li>
                                    <a data-toggle="modal" data-target="{{ auth()->user()->level <= 4 ? '#user-suspend-'.$user->id : 'javascript:void();' }}"><li class="dropdown-item {{ auth()->user()->level > 4 ? 'disabled' : '' }}">Suspend User</li></a>
                                </ul>
                            </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection