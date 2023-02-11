@extends('includes.core')
@section('title', 'Transaction')
@section('modal-header', 'Transaction Deletion')
@section('modal-message', 'Are you sure want to delete this tranaction? the data will not be able to restored after deletion')
@section('content')
<div class="col-lg-12">
    <div class="my-4">
        <a class="btn btn-light zmdi zmdi-account-add" href="transaction-history?page=add"> Add Transaction</a>
    </div>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title text-center">Transaction History</h5>
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Type</th>
                        <th scope="col">Income</th>
                        <th scope="col">Expenditure</th>
                        <th scope="col">Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($transactions as $transaction)
                            <tr>
                                <th scope="row">{{ $loop->index + 1 }}</th>
                                <td>{{ $transaction->title }}</td>
                                <td>{{ $transaction->description }}</td>
                                <td>{{ $transaction->type }}</td>
                                <td>IDR {{ $transaction->income }}</td>
                                <td>IDR {{ $transaction->expenditure }}</td>
                                <td>{{ $transaction->transaction_date }}</td>
                                <td>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-light btn-block waves-effect waves-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Action
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-right bg-dark-light">
                                            <li class="dropdown-divider"></li>
                                            <a href="transaction-history?page=edit&transaction={{ $transaction->id }}"><li class="dropdown-item">Edit User</li></a>
                                            <li class="dropdown-divider"></li>
                                            <a data-toggle="modal" data-target="#confirmation-modal"><li class="dropdown-item">Delete User</li></a>
                                            <li class="dropdown-divider"></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        <tr>
                            <td></td>
                            <td>Total</td>
                            <td></td>
                            <td>IDR {{ $total_expenditure }}</td>
                            <td>IDR {{ $total_income }}</td>
                        </tr>   
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

@section('action')
    <a href="transaction/delete/{{$transaction->id}}"  type="button" class="btn btn-success">Ok</a>
@endsection