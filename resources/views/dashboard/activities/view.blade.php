@extends('includes.core')
@section('title', 'Activities Management')
@section('modal-header', 'Activity Deletion')
@section('modal-message', 'Are you sure want to delete this activity? the data will not be able to restored after deletion')
@section('content')
@include('components.modal-popup', [
    'data' => $activities, 
    'url' => '/dashboard/users/activity/delete/',
    'tag' => 'activity-delete-'
])
<div class="col-lg-12">
    <div class="my-4">
        <a class="btn btn-light zmdi zmdi-collection-plus" href="/dashboard/users/activity?page=add"> Add Activity</a>
        <a class="btn btn-light zmdi zmdi-download" href="/dashboard/users/activity/download"> Download Activity Report</a>
    </div>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title text-center">Existing Activities in Server</h5>
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Activity</th>
                        <th scope="col">Start Date</th>
                        <th scope="col">End Date</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($activities as $activity)
                            <tr>
                                <th scope="row">{{ $loop->index + 1 }}</th>
                                <td>{{ $activity->name }}</td>
                                <td>{{ $activity->start_date }}</td>
                                <td>{{ $activity->end_date }}</td>
                                <td>{{ $activity->status }}</td>
                                <td>
                                <div class="btn-group mx-auto">
                                    <button type="button" class="btn btn-light btn-block waves-effect waves-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Action
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-right bg-dark-light">
                                        <li class="dropdown-divider"></li>
                                        <a href="{{ auth()->user()->level <= 4 ? '/dashboard/users/activity?page=edit&id=' . $activity->id : 'javascript:void();' }}"><li class="dropdown-item {{ auth()->user()->level > 4 ? 'disabled' : '' }}">Edit</li></a>
                                        <li class="dropdown-divider"></li>
                                        <a href="/dashboard/users/activity/close/{{ $activity->id }}"><li class="dropdown-item">Close Activity</li></a>
                                        <li class="dropdown-divider"></li>
                                        <a data-toggle="modal" data-target="{{ auth()->user()->level <= 3 ? '#activity-delete-' . $activity->id : 'javascript:void();' }}"><li class="dropdown-item {{ auth()->user()->level > 3 ? 'disabled' : '' }}">Delete</li></a>
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