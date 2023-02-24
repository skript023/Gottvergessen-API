@extends('includes.core')
@section('title', 'Transaction')
@section('modal-header', 'Transaction Deletion')
@section('modal-message', 'Are you sure want to delete this tranaction? the data will not be able to restored after deletion')
@section('content')
@include('components.modal-popup', [
    'data' => $transactions, 
    'url' => 'transaction/delete/',
    'tag' => 'transaction-delete-'
])
<div class="col-lg-12">
    <div class="my-4">
        <a class="btn btn-light zmdi zmdi-account-add" href="transaction-history?page=add"> Add Transaction</a>
    </div>
    <div class="card mt-3">
        <div class="card-content">
            <div class="row row-group m-0">
                <div class="col-12 col-lg-6 col-xl-3 border-light">
                    <div class="card-body">
                    <h5 class="text-white mb-0">{{ abs($total_expenditure) }} <span class="float-right"><i class="fa fa-shopping-cart"></i></span></h5>
                        <div class="progress my-3" style="height:3px;">
                        <div class="progress-bar" style="width:55%"></div>
                        </div>
                    <p class="mb-0 text-white small-font">Total Expenditure <span class="float-right">{{ $avg_exp > 0 ? "+" : "-" }}{{ $avg_exp }}% <i class="{{ $avg_exp > 0 ? "zmdi zmdi-long-arrow-up"  : "zmdi zmdi-long-arrow-down"}}"></i></span></p>
                    </div>
                </div>
                <div class="col-12 col-lg-6 col-xl-3 border-light">
                    <div class="card-body">
                    <h5 class="text-white mb-0">{{ $total_income }} <span class="float-right"><i class="fa fa-bar-chart"></i></span></h5>
                        <div class="progress my-3" style="height:3px;">
                        <div class="progress-bar" style="width:55%"></div>
                        </div>
                    <p class="mb-0 text-white small-font">Total Revenue <span class="float-right">{{ $avg_inc > 0 ? "+" : "-" }}{{ $avg_inc }}% <i class="{{ $avg_inc > 0 ? "zmdi zmdi-long-arrow-up"  : "zmdi zmdi-long-arrow-down"}}"></i></span></p>
                    </div>
                </div>
                <div class="col-12 col-lg-6 col-xl-3 border-light">
                    <div class="card-body">
                    <h5 class="text-white mb-0">{{ $bank }} <span class="float-right"><i class="fa fa-cc-visa"></i></span></h5>
                        <div class="progress my-3" style="height:3px;">
                        <div class="progress-bar" style="width:{{ $bank / $SALARY * 100 }}%"></div>
                        </div>
                    <p class="mb-0 text-white small-font">Bank <span class="float-right">+{{ $rate_income }}% <i class="zmdi zmdi-long-arrow-up"></i></span></p>
                    </div>
                </div>
                <div class="col-12 col-lg-6 col-xl-3 border-light">
                    <div class="card-body">
                    <h5 class="text-white mb-0">{{ $cash }} <span class="float-right"><i class="fa fa-money"></i></span></h5>
                        <div class="progress my-3" style="height:3px;">
                        <div class="progress-bar" style="width:{{ $cash / $cash * 100 }}%"></div>
                        </div>
                    <p class="mb-0 text-white small-font">Cash <span class="float-right">+{{ $rate_income }}% <i class="zmdi zmdi-long-arrow-up"></i></span></p>
                    </div>
                </div>
            </div>
        </div>
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
                                <td>{{ $transaction->user->balance->wallet->currency }} {{ $transaction->income }}</td>
                                <td>{{ $transaction->user->balance->wallet->currency }} {{ $transaction->expenditure }}</td>
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
                                            <a data-toggle="modal" data-target="#transaction-delete-{{ $transaction->id }}"><li class="dropdown-item">Delete User</li></a>
                                            <li class="dropdown-divider"></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>IDR {{ $total_income }}</td>
                            <td>IDR {{ $total_expenditure }}</td>
                        </tr>   
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection