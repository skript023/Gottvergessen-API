
<div class="card col-lg-6 mx-auto my-4">
    <div class="card-content p-2">
        <div class="card-body">
            <div class="card-title text-uppercase text-center py-3">Add Restriction</div>
            <form action="/dashboard/restriction/add" method="post">
                @csrf
                <div class="form-group">
                    <label for="input-6">Access Level</label>
                    <select id="level" name="level" class="form-control form-control-rounded text-center mb-3">
                        <option class="bg-dark-light" value="">--- Select type ---</option>
                        @foreach ($levels as $key => $level)
                            <option class="bg-dark-light" value="{{ $level->id }}">{{ $level->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="input-6">Role</label>
                    <select id="role" name="role" class="form-control form-control-rounded text-center mb-3">
                        <option class="bg-dark-light" value="">--- Select type ---</option>
                        @foreach ($roles as $key => $role)
                            <option class="bg-dark-light" value="{{ $role->id }}">{{ $role->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="input-6">Route</label>
                    <input type="text" name="route" class="form-control form-control-rounded" id="input-6" placeholder="Enter Route" required>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-light btn-round px-5 mx-auto d-block"><i class="icon-lock"></i> Add Transaction</button>
                </div>
            </form>
        </div>
    </div>
</div>
