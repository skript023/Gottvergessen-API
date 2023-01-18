@extends('includes.core')
@section('title', 'Binaries Management')
@section('content')
<div class="col-lg-12">
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
                                <div class="btn-group">
                                <button type="button" class="btn btn-light btn-block waves-effect waves-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Action
                                </button>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li class="dropdown-divider"></li>
                                    <a href="bin?page=edit&bin={{$bin->id}}"><li class="dropdown-item">Edit Bin</li></a>
                                    <li class="dropdown-divider"></li>
                                    <a href="bin/delete/{{$bin->id}}"><li class="dropdown-item">Delete Bin</li></a>
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