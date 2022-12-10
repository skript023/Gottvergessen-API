
<div class="card col-lg-6 mx-auto my-4">
    <div class="card-content p-2">
        <div class="card-body">
            <div class="card-title text-uppercase text-center py-3">Add User</div>
            <form action="/dashboard/users/add" method="post">
                @csrf
                <div class="form-group">
                    <div class="btn btn-light btn-round px-5">
                        <input type="file" class="form-control" name="user_image">
                    </div>
                </div>
                <div class="form-group">
                    <label for="input-6">Fullname</label>
                    <input type="text" name="fullname" class="form-control form-control-rounded" id="input-6" placeholder="Enter Fullname" required>
                </div>
                <div class="form-group">
                    <label for="input-6">Duration</label>
                    <input type="text" name="access_duration" class="form-control form-control-rounded" id="input-6" placeholder="Enter Fullname" required>
                </div>
                <div class="form-group">
                    <label for="input-6">Fullname</label>
                    <input type="text" name="fullname" class="form-control form-control-rounded" id="input-6" placeholder="Enter Fullname" required>
                </div>
                <div class="form-group">
                    <label for="input-7">Email</label>
                    <input type="text" name="email" class="form-control form-control-rounded" id="input-7" placeholder="Enter Email" required>
                </div>
                <div class="form-group">
                    <label for="input-8">Username</label>
                    <input type="text" name="username" class="form-control form-control-rounded" id="input-8" placeholder="Enter Username" required>
                </div>
                <div class="form-group">
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
                    <label for="input-9">Password</label>
                    <input type="password" name="password" class="form-control form-control-rounded" id="input-9" placeholder="Enter Password" required>
                </div>
                <div class="form-group">
                    <label for="input-10">Confirm Password</label>
                    <input type="password" name="password_confirmation" class="form-control form-control-rounded" id="input-10" placeholder="Confirm Password" required>
                    <span id='message'></span>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-light btn-round px-5 mx-auto d-block"><i class="icon-lock"></i>Add Account</button>
                </div>
            </form>
        </div>
    </div>
</div>
