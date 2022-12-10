<div class="col-lg-8 mx-auto my-4">
    <div class="card">
        <div class="card-body">
            <div class="card-title">Update User Information</div>
            <hr>
            @foreach ($users as $user)
                @if ($user->id == request()->uid)
                    <form action="/dashboard/users/edit_status" method="post">
                        @if ($user->status === 'unverified')
                            <button class="btn btn-outline-primary waves-effect waves-light" type="submit" name="active">Verified User</button>
                        @else
                            <button class="btn btn-outline-danger waves-effect waves-light" type="submit" name="pending">Unverified User</button>
                        @endif
                    </form>

                    <form action="/dashboard/users/update/{{ request()->uid }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            @isset ($user->image)
                            <img src="{{ asset('storage/uploads/avatar') . '/' . $user->image }}" class="rounded-circle img-fluid img-thumbnail mx-auto d-block" id="profile-img" alt="profile-img">
                            @else
                            <img src="https://via.placeholder.com/400x400" class="rounded-circle img-fluid img-thumbnail mx-auto my-5 d-block" id="profile-img" alt="">
                            @endif
                            <div class="form-group btn btn-light btn-round px-5 mx-auto d-block">
                                <label for="avatar">Avatar</label>
                                <input type="file" class="form-control" name="image">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="fullname">Fullname</label>
                            <input type="text" name="fullname" class="form-control form-control-rounded" id="fullname" placeholder="{{ $user->fullname }}">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" name="email" class="form-control form-control-rounded" id="email" placeholder="{{ $user->email }}">
                        </div>
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" name="username" class="form-control form-control-rounded" id="username" placeholder="{{ $user->username }}">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" class="form-control form-control-rounded" id="password" placeholder="Enter Password" required>
                        </div>
                        <div class="form-group">
                            <label for="confirm_password">Confirm Password</label>
                            <input type="password" name="password_confirmation" class="form-control form-control-rounded" id="input-10" placeholder="Confirm Password" required>
                            <span id='message'></span>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-light btn-round px-5 mx-auto d-block"><i class="icon-lock"></i>Update Account</button>
                        </div>
                    </form>
                @endif
            @endforeach
        </div>
    </div>
</div>