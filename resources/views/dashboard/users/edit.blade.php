<div class="col-lg-8 mx-auto my-4">
    <div class="card">
        <div class="card-body">
            <div class="card-title">Update User Information</div>
            <hr>
            @foreach ($users as $user)
                @if ($user->id == request()->user)
                    <form action="/dashboard/users/status/update" method="post">
                        @if ($user->status === 'unverified')
                            <button class="btn btn-outline-primary waves-effect waves-light" type="submit" name="active">Verified User</button>
                        @else
                            <button class="btn btn-outline-danger waves-effect waves-light" type="submit" name="pending">Unverified User</button>
                        @endif
                    </form>

                    <form action="/dashboard/users/update/{{ $user->id }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            @isset ($user->image)
                            <img src="{{ asset('storage/uploads/avatar') . '/' . $user->image }}" class="rounded-circle img-fluid img-thumbnail mx-auto d-block" id="profile-img" alt="profile-img">
                            @else
                            <img src="https://via.placeholder.com/400x400" class="rounded-circle img-fluid img-thumbnail mx-auto my-5 d-block" id="profile-img" alt="">
                            @endif
                            <div class="form-group">
                                <label for="avatar">Avatar</label>
                                <input type="file" class="form-control form-control-rounded" name="image">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="input-6">Role</label>
                            <select id="role" name="role" class="form-control form-control-rounded text-center mb-3">
                                <option class="bg-dark-light" value="">--- Select Role ---</option>
                                @foreach ($roles as $key => $role)
                                    <option class="bg-dark-light" value="{{ $role->id }}">{{ $role->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="input-6">Access Level</label>
                            <select id="level" name="level" class="form-control form-control-rounded text-center mb-3">
                                <option class="bg-dark-light" value="">--- Select Access Level ---</option>
                                @foreach ($levels as $key => $level)
                                    <option class="bg-dark-light" value="{{ $level->id }}">{{ $level->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="input-6">Ownership</label>
                            <select id="ownership" name="ownership" class="form-control form-control-rounded text-center mb-3">
                                <option class="bg-dark-light" value="">--- Select Ownerships ---</option>
                                @foreach ($ownerships as $key => $ownership)
                                    <option class="bg-dark-light" value="{{ $ownership->id }}">{{ $ownership->type }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="input-6">Status</label>
                            <select id="status" name="status" class="form-control form-control-rounded text-center mb-3">
                                <option class="bg-dark-light" value="">--- Select Status ---</option>
                                <option class="bg-dark-light" value="verified">Verified</option>
                                <option class="bg-dark-light" value="unverified">Unverified</option>
                                <option class="bg-dark-light" value="suspended">Suspended</option>
                            </select>
                        </div>
                        <script>
                            document.getElementById('role').value = '{{ $user->roles->id }}';
                            document.getElementById('level').value = '{{ $user->access_level->id }}';
                            document.getElementById('ownership').value = '{{ $user->ownerships->id }}';
                            document.getElementById('status').value = '{{ $user->status }}';
                        </script>
                        <div class="form-group">
                            <label for="fullname">Fullname</label>
                            <input type="text" name="fullname" class="form-control form-control-rounded" id="fullname" value="{{ $user->fullname }}">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" name="email" class="form-control form-control-rounded" id="email" value="{{ $user->email }}">
                        </div>
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" name="username" class="form-control form-control-rounded" id="username" value="{{ $user->username }}">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" class="form-control form-control-rounded" id="password" value="Enter Password" required>
                        </div>
                        <div class="form-group">
                            <label for="confirm_password">Confirm Password</label>
                            <input type="password" name="password_confirmation" class="form-control form-control-rounded" id="input-10" value="Confirm Password" required>
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