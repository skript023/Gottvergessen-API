@extends('includes.core')
@section('title', 'Binaries Management')
@section('modal-header', 'Binary Deletion')
@section('modal-message', 'Are you sure want to delete this binary? the data will not be able to restored after deletion')
@section('content')
@include('components.modal-popup', [
    'data' => $binaries, 
    'url' => 'bin/delete/',
    'tag' => 'binary-delete-'
])
<div class="col-lg-12">
    <div class="my-4">
        <a class="btn btn-light zmdi zmdi-collection-plus" href="/dashboard/bin?page=add"> Add Binary</a>
    </div>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title text-center">Existed Binaries in Server</h5>
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Game</th>
                        <th scope="col">Bin</th>
                        <th scope="col">Target</th>
                        <th scope="col">Version</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($binaries as $bin)
                            <tr>
                                <th scope="row">{{ $loop->index + 1 }}</th>
                                <td>{{ $bin->game }}</td>
                                <td>{{ $bin->file }}</td>
                                <td>{{ $bin->target }}</td>
                                <td>{{ $bin->version }}</td>
                                <td>{{ $bin->supported == 1 ? "Supported" : "Abanddoned" }}</td>
                                <td>
                                <div class="btn-group mx-auto">
                                    <button type="button" class="btn btn-light btn-block waves-effect waves-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Action
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-right bg-dark-light">
                                        <li class="dropdown-divider"></li>
                                        <a href="bin?page=upload&bin={{$bin->id}}"><li class="dropdown-item">Upload</li></a>
                                        <li class="dropdown-divider"></li>
                                        <li class="dropdown-divider"></li>
                                        <a href="bin?page=edit&bin={{$bin->id}}"><li class="dropdown-item">Edit</li></a>
                                        <li class="dropdown-divider"></li>
                                        <a data-toggle="modal" data-target="#binary-delete-{{ $bin->id }}"><li class="dropdown-item">Delete</li></a>
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