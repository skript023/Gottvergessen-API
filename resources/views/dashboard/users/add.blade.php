
<div class="card col-lg-6 mx-auto my-4">
    <div class="card-content p-2">
        <div class="card-body">
            <div class="card-title text-uppercase text-center py-3">Add User</div>
            <form action="/dashboard/users/add" method="post">
                @csrf
                <div class="form-group">
                    <div class="btn btn-light btn-round px-5">
                        <input type="file" class="form-control" name="image">
                    </div>
                </div>
                <select id="role" name="role" class="form-control text-center mb-3">
                    <option class="bg-dark-light" value="">--- Select type ---</option>
                    @foreach ($roles as $key => $role)
                        <option class="bg-dark-light" value="{{ $role->id }}">{{ $role->name }}</option>
                    @endforeach
                </select>
                <select id="level" name="level" class="form-control text-center mb-3">
                    <option class="bg-dark-light" value="">--- Select type ---</option>
                    @foreach ($levels as $key => $level)
                        <option class="bg-dark-light" value="{{ $level->id }}">{{ $level->name }}</option>
                    @endforeach
                </select>
                <select id="ownership" name="ownership" class="form-control text-center mb-3">
                    <option class="bg-dark-light" value="">--- Select type ---</option>
                    @foreach ($ownerships as $key => $ownership)
                        <option class="bg-dark-light" value="{{ $ownership->id }}">{{ $ownership->type }}</option>
                    @endforeach
                </select>
                <select id="status" name="status" class="form-control text-center mb-3">
                    <option class="bg-dark-light" value="">--- Select type ---</option>
                    <option class="bg-dark-light" value="verified">Verified</option>
                    <option class="bg-dark-light" value="unverified">Unverified</option>
                    <option class="bg-dark-light" value="suspended">Suspended</option>
                </select>
                <div class="form-group">
                    <label for="input-6">Fullname</label>
                    <input type="text" name="fullname" class="form-control form-control-rounded" id="input-6" placeholder="Enter Fullname" required>
                </div>
                <div class="form-group">
                    <label for="input-6">Access</label>
                    <input type="number" name="access" class="form-control form-control-rounded" id="input-6" placeholder="Enter Days" required>
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
