<form action="/dashboard/role/edit/{{ request()->edit }}" method="post">
    @csrf
    <div class="form-group">
        <label>Update Binary</label>
        @foreach ($binaries as $bin)
            @if ($bin->id == request()->bin)
                <input type="text" class="form-control" name="role_name" value="{{ $bin->file }}">
            @endif
        @endforeach
    </div>

    <div class="form-group">
        <button type="submit" name="update" class="btn btn-light btn-block">Update Binary</button>
    </div>
</form>