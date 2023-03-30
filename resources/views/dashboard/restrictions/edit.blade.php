<div class="col-lg-8 mx-auto my-4">
    <div class="card">
        <div class="card-body">
            <div class="card-title">Update Transaction History</div>
            <hr>
            @foreach ($restrictions as $restriction)
                @if ($restriction->id == request()->restriction)
                    <form action="/dashboard/users/restriction/update/{{ $restriction->id }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <label for="input-6">Type</label>
                        <select id="level" name="level" class="form-control text-center mb-3">
                            <option class="bg-dark-light" value="">--- Select Level ---</option>
                            @foreach ($levels as $key => $level)
                                <option class="bg-dark-light" value="{{ $level->id }}">{{ $level->name }}</option>
                            @endforeach
                        </select>
                        <select id="role" name="role" class="form-control text-center mb-3">
                            <option class="bg-dark-light" value="">--- Select Role ---</option>
                            @foreach ($roles as $key => $role)
                                <option class="bg-dark-light" value="{{ $role->id }}">{{ $role->name }}</option>
                            @endforeach
                        </select>
                        <script>
                            document.getElementById('level').value = '{{ $restriction->level->name }}';
                            document.getElementById('role').value = '{{ $restriction->role->name }}';
                        </script>
                        <div class="form-group">
                            <label for="title">Route</label>
                            <input type="text" name="route" class="form-control form-control-rounded" id="title" value="{{ $restriction->name }}">
                        </div>
                    </form>
                @endif
            @endforeach
        </div>
    </div>
</div>