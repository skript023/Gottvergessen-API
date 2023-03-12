
<div class="card col-lg-6 mx-auto my-4">
    <div class="card-content p-2">
        <div class="card-body">
            <div class="card-title text-uppercase text-center py-3">Add New Activity</div>
            <form action="/dashboard/users/activity/add" method="post">
                @csrf
                <div class="form-group">
                    <label for="title">Activity</label>
                    <input type="text" name="name" class="form-control form-control-rounded" id="name" placeholder="Enter Activity" required>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-light btn-round px-5 mx-auto d-block"><i class="icon-lock"></i> Add New Wallet</button>
                </div>
            </form>
        </div>
    </div>
</div>
