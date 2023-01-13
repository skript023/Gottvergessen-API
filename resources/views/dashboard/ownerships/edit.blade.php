<form action="/dashboard/ownerships/edit/{{ request()->edit }}" method="post">
    @csrf
    <div class="form-group">
        <label>Update Ownerships</label>
        @foreach ($ownerships as $ownership)
            @if ($ownership->id == request()->edit)
                <input type="text" class="form-control" name="ownership" value="{{ $ownership->role }}">
            @endif
        @endforeach
    </div>

    <div class="form-group">
        <button type="submit" name="update" class="btn btn-light btn-block">Update Ownership</button>
    </div>
</form>