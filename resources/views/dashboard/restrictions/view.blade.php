@extends('includes.core')
@section('title', 'Activities Management')
@section('modal-header', 'restriction Deletion')
@section('modal-message', 'Are you sure want to delete this restriction? the data will not be able to restored after deletion')
@section('content')
@include('components.modal-popup', [
    'data' => $restrictions, 
    'url' => '/dashboard/users/restriction/delete/',
    'tag' => 'restriction-delete-'
])
<div class="col-lg-12">
    <div class="my-4">
        <a class="btn btn-light zmdi zmdi-collection-plus" href="/dashboard/users/restriction?page=add"> Add Restriction</a>
        <a class="btn btn-light zmdi zmdi-download" href="/dashboard/users/restriction/download"> Download Restriction Report</a>
    </div>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title text-center">Existed Restriction in Server</h5>
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Restriction</th>
                        <th scope="col">Start Date</th>
                        <th scope="col">End Date</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($restrictions as $restriction)
                            <tr>
                                <th scope="row">{{ $loop->index + 1 }}</th>
                                <td>{{ $restriction->name }}</td>
                                <td>{{ $restriction->start_date }}</td>
                                <td>{{ $restriction->end_date }}</td>
                                <td>{{ $restriction->status }}</td>
                                <td>
                                <div class="btn-group mx-auto">
                                    <button type="button" class="btn btn-light btn-block waves-effect waves-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Action
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-right bg-dark-light">
                                        <li class="dropdown-divider"></li>
                                        <a href="{{ auth()->user()->level <= 4 ? '/dashboard/users/restriction?page=edit&id=' . $restriction->id : 'javascript:void();' }}"><li class="dropdown-item {{ auth()->user()->level > 4 ? 'disabled' : '' }}">Edit</li></a>
                                        <li class="dropdown-divider"></li>
                                        <a href="/dashboard/users/restriction/close/{{ $restriction->id }}"><li class="dropdown-item">Close restriction</li></a>
                                        <li class="dropdown-divider"></li>
                                        <a data-toggle="modal" data-target="{{ auth()->user()->level <= 3 ? '#restriction-delete-' . $restriction->id : 'javascript:void();' }}"><li class="dropdown-item {{ auth()->user()->level > 3 ? 'disabled' : '' }}">Delete</li></a>
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