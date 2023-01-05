<div class="card col-lg-6 mx-auto my-4">
    <div class="card-content p-2">
        <div class="card-body">
            <div class="card-title text-uppercase text-center py-3">Add New Binary</div>
            <form action="/dashboard/bin/add" method="post">
                @csrf
                <div class="form-group">
                    <div class="btn btn-light btn-round px-5">
                        <label for="avatar">File</label>
                        <input type="file" class="form-control" name="file">
                    </div>
                </div>
                <div class="form-group">
                    <label for="input-6">Game</label>
                    <input type="text" name="game" class="form-control form-control-rounded" id="input-6" placeholder="Enter Game" required>
                </div>
                <div class="form-group">
                    <label for="input-6">Target Process</label>
                    <input type="text" name="target" class="form-control form-control-rounded" id="input-6" placeholder="Enter Target Process" required>
                </div>
                <div class="form-group">
                    <label for="input-6">Version</label>
                    <input type="text" name="version" class="form-control form-control-rounded" id="input-6" placeholder="Enter Version" required>
                </div>
                <div class="form-group">
                    <label for="input-7">Version Machine</label>
                    <input type="text" name="version_machine" class="form-control form-control-rounded" id="input-7" placeholder="Enter Version Machine" required>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-light btn-round px-5 mx-auto d-block"><i class="icon-lock"></i>Add New Binary</button>
                </div>
            </form>
        </div>
    </div>
</div>
