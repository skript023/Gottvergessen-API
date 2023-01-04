@extends('dashboard.includes.core')
@section('title', 'Profile')

@section('content')
<div class="col-lg-12">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Client Action History</h5>
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Log Level</th>
                        <th scope="col">Username</th>
                        <th scope="col">Message</th>
                        <th scope="col">File</th>
                        <th scope="col">Line</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($logs as $log)
                            <tr>
                                <th scope="row">{{ $loop->index + 1 }}</th>
                                <td>{{ $log->prefix }}</td>
                                <td>{{ $log->owner }}</td>
                                <td>{{ $log->message }}</td>
                                <td>{{ $log->file }}</td>
                                <td>{{ $log->line }}</td>
                                <td>
                                <div class="btn-group">
                                <a type="button" href="logs/delete/{{$log->id}}" class="btn btn-light btn-block waves-effect waves-light" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Delete
                                </a>
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