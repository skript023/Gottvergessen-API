@extends('includes.core')
@section('title', 'Users')
@section('content')
<div class="col-lg-12">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Users List</h5>
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Fullname</th>
                        <th scope="col">Ownership</th>
                        <th scope="col">Role</th>
                        <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <th scope="row">{{ $loop->index + 1 }}</th>
                                <td>{{ $user->fullname }}</td>
                                @switch($user->ownership)
                                    @case(0)
                                        <td>{{ "NOT OWNED" }}</td>
                                        @break
                                    @case(1)
                                        <td>{{ "STANDARD EDITION" }}</td>
                                        @break
                                    @case(2)
                                        <td>{{ "SILVER EDITION" }}</td>
                                        @break
                                    @case(3)
                                        <td>{{ "GOLD EDITION" }}</td>
                                        @break
                                    @default
                                        <td>{{ "DEVELOPER VERSION" }}</td>
                                        @break
                                @endswitch
                                <td>{{ $user->role }}</td>
                                <td>{{ $user->status }}</td>
                                <td>
                                <div class="btn-group">
                                <button type="button" class="btn btn-light btn-block waves-effect waves-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Action
                                </button>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li class="dropdown-divider"></li>
                                    <a href="users?delete=<{{$user->id}}"><li class="dropdown-item">Delete User</li></a>
                                    <li class="dropdown-divider"></li>
                                    <a href="users?page=edit&uid={{$user->id}}"><li class="dropdown-item">Edit User</li></a>
                                    <li class="dropdown-divider"></li>
                                    {{-- <a class="dropdown-item" href="#">Void</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">
                                        <button class="btn btn-info">Void</button>
                                    </a> --}}
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