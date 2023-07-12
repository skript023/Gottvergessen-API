@extends('dashboard.includes.core')
@section('title', 'Balances Information')

@section('content')
<div class="col-lg-12">
    <div class="my-4">
        <a class="btn btn-light zmdi zmdi-account-add" href="users?page=add"> Add Account</a>
    </div>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title text-center">Balance List</h5>
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Fullname</th>
                        <th scope="col">Type</th>
                        <th scope="col">Balance</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($balances as $balance)
                            <tr>
                                <th scope="row">{{ $loop->index + 1 }}</th>
                                <td>{{ $balance->user->fullname }}</td>
                                <td>{{ $balance->wallet->name }}</td>
                                <td>{{ $balance->amount }}</td>
                                <td>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-light btn-block waves-effect waves-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Action
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-right bg-dark-light">
                                            <li class="dropdown-divider"></li>
                                            <a href="users?page=edit&user={{ $balance->id }}"><li class="dropdown-item">Edit User</li></a>
                                            <li class="dropdown-divider"></li>
                                            <a data-toggle="modal" data-target="#balance-delete-{{ $balance->id }}"><li class="dropdown-item">Delete User</li></a>
                                            <li class="dropdown-divider"></li>
                                            <a data-toggle="modal" data-target="#balance-suspend-{{ $balance->id }}"><li class="dropdown-item">Suspend User</li></a>
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