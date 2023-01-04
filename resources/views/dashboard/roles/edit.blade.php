@extends('dashboard.includes.core')
@section('title', 'Change Role')
@section('content')
    <form method="post">
        <div class="form-group">
            <label>Update Role</label>
            <input type="text" class="form-control" name="category_name" value="{{ $role->role }}">
        </div>

        <div class="form-group">
            <button type="submit" name="update" class="btn btn-warning btn-block">Update Category</button>
        </div>
    </form>
@endsection