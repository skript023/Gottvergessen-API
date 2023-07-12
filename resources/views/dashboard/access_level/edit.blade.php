<form action="/dashboard/access/edit/{{ request()->level }}" method="post">
    @csrf
    <div class="form-group">
        <label>Update Role</label>
        @foreach ($levels as $level)
            @if ($level->id == request()->level)
                <input type="text" class="form-control text-center" name="level" value="{{ $level->name }}">
            @endif
        @endforeach
    </div>

    <div class="form-group">
        <button type="submit" name="update" class="btn btn-light btn-block">Update Access Level</button>
    </div>
</form>