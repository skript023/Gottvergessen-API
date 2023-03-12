<div class="col-lg-8 mx-auto my-4">
    <div class="card">
        <div class="card-body">
            <div class="card-title">Edit Activity History</div>
            <hr>
            @foreach ($activities as $activity)
                @if ($activity->id == request()->id)
                    <form action="/dashboard/users/activity/update/{{ $activity->id }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="name">Activity</label>
                            <input type="text" name="name" class="form-control form-control-rounded" id="name" placeholder="{{ $activity->name }}" required>
                        </div>
                        <div class="form-group">
                            <label for="symbol">Status</label>
                            <input type="text" name="status" class="form-control form-control-rounded" id="symbol" placeholder="{{ $activity->status }}" required>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-light btn-round px-5 mx-auto d-block"><i class="icon-lock"></i>Update Activity</button>
                        </div>
                    </form>
                @endif
            @endforeach
        </div>
    </div>
</div>