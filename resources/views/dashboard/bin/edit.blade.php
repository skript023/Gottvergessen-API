<form action="/dashboard/role/edit/{{ request()->edit }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label>Update Binary</label>
        <input type="file" class="form-control" name="file">
    </div>

    <div class="form-group">
        <button type="submit" name="update" class="btn btn-light btn-block">Update Binary</button>
    </div>
</form>