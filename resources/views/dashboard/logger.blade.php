@extends('dashboard.includes.core')
@section('title', 'Profile')
@section('modal-header', 'Log Deletion')
@section('modal-message', 'Are you sure want to delete this log? the data will not be able to restored after deletion')

@section('content')
@include('components.modal-popup', [
    'data' => $logs, 
    'url' => '/dashboard/logs/delete/',
    'tag' => 'log-delete-'
])
<div class="col-lg-12">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title text-center">Client Log History</h5>
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Log Level</th>
                        <th scope="col">Username</th>
                        <th scope="col">File</th>
                        <th scope="col">Line</th>
                        <th scope="col">Message</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($logs as $log)
                            <tr>
                                <th scope="row">{{ $loop->index + 1 }}</th>
                                <td>{{ $log->prefix }}</td>
                                <td>{{ $log->owner }}</td>
                                <td>{{ $log->file }}</td>
                                <td>{{ $log->line }}</td>
                                <td>{{ $log->message }}</td>
                                <td>
                                    <button type="button" data-toggle="modal" data-target="#log-delete-{{ $log->id }}" class="btn btn-light">Delete</button>
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