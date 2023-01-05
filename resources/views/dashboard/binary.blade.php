@extends('dashboard.includes.core')
@section('title', 'Binary Information')
@section('content')

<div class="container-fluid">
    <div class="row mt-3 mb-4">
        <div class="card col-md-4 mx-auto my-4">
            <div class="card-content p-2">
                <div class="card-body">
                    <div class="card-title text-uppercase text-center py-3">Upload Binary</div>
                    <form action="/dashboard/role/add" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="input-6" class="text-center">Binary</label>
                            <input type="text" name="role" class="form-control form-control-rounded" id="input-6" placeholder="Enter Fullname" required>
                        </div>
                        
                        <div class="form-group">
                            <button type="submit" class="btn btn-light btn-round px-5 mx-auto d-block"><i class="icon-lock"></i>Add Role</button>
                        </div>
                    </form>
                    @isset(request()->bin)
                        @include('dashboard.bin.edit')
                    @endisset
                </div>
            </div>
        </div>

        <div class="card col-md-6 mx-auto my-4">
            <div class="card-content p-2">
                <div class="card-body">
                    <div class="card-title text-uppercase text-center py-3">List Binary</div>
                        <table class="table table-boardered">
                            <thead>
                                <tr>
                                    <th>Binary Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($binaries as $bin)
                                <tr>
                                    <td>{{$bin->file}}</td>
                                    <td>
                                        <a href="/dashboard/bin?bin={{$bin->id}}" class="btn btn-light">Update</a>
                                        <a href="/dashboard/bin/delete/{{$bin->id}}" class="btn btn-light">Delete</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection