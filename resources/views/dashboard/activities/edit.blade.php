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
                            <input type="text" name="name" class="form-control form-control-rounded" id="name" value="{{ $activity->name }}" required>
                        </div>
                        <select id="status" name="status" class="form-control text-center mb-3">
                            <option class="bg-dark-light" value="">--- Select type ---</option>
                            <option class="bg-dark-light" value="Completed">Completed</option>
                            <option class="bg-dark-light" value="On Progress">On Progress</option>
                        </select>
                        <script>
                            document.getElementById('status').value = '{{ $activity->status }}';
                        </script>
                        <div class="form-group date">
                            <label for="symbol">Start Date</label>
                            <input type="date" name="start_date"  class="form-control form-control-rounded" id="start_date" value={{ $activity->start_date }}>
                        </div>
                        <div class="form-group date">
                            <label for="symbol">End Date</label>
                            <input type="date" name="end_date"  class="form-control form-control-rounded" id="end_date" value={{ $activity->end_date }}>
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