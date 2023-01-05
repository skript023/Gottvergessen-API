<form action="/dashboard/role/edit/{{ request()->edit }}" method="post">
    @csrf
    <div class="form-group">
        <label>Update Role</label>
        @foreach ($binaries as $bin)
            @if ($bin->id == request()->bin)
                <input type="text" class="form-control" name="role_name" value="{{ $role->role }}">
            @endif
        @endforeach
    </div>

    <div class="form-group">
        <button type="submit" name="update" class="btn btn-light btn-block">Update Category</button>
    </div>
</form>