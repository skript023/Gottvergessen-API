@extends('includes.core')
@section('title', 'Wallets Management')
@section('modal-header', 'Binary Deletion')
@section('modal-message', 'Are you sure want to delete this binary? the data will not be able to restored after deletion')
@section('content')
@include('components.modal-popup', [
    'data' => $wallets, 
    'url' => 'wallets/delete/',
    'tag' => 'wallet-delete-'
])
<div class="col-lg-12">
    <div class="my-4">
        <a class="btn btn-light zmdi zmdi-collection-plus" href="/dashboard/wallets?page=add"> Add Wallet</a>
    </div>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title text-center">Existed Wallets in Server</h5>
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Wallet</th>
                        <th scope="col">Code</th>
                        <th scope="col">Currency</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($wallets as $wallet)
                            <tr>
                                <th scope="row">{{ $loop->index + 1 }}</th>
                                <td>{{ $wallet->name }}</td>
                                <td>{{ $wallet->symbol }}</td>
                                <td>{{ $wallet->currency }}</td>
                                <td>
                                <div class="btn-group mx-auto">
                                    <button type="button" class="btn btn-light btn-block waves-effect waves-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Action
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-right bg-dark-light">
                                        <li class="dropdown-divider"></li>
                                        <a href="wallets?page=edit&wallet={{ $wallet->id }}"><li class="dropdown-item">Edit</li></a>
                                        <li class="dropdown-divider"></li>
                                        <a data-toggle="modal" data-target="#wallet-delete-{{ $wallet->id }}"><li class="dropdown-item">Delete</li></a>
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