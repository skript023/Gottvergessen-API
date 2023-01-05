<div class="col-lg-8 mx-auto my-4">
    <div class="card">
        <div class="card-body">
            <div class="card-title">Update User Information</div>
            <hr>
            @foreach ($binaries as $bin)
                @if ($bin->id == request()->bin)
                    <div class="mb-5">
                        <form action="/dashboard/bin/support/update" method="post">
                            @if ($bin->support == 1)
                                <button class="btn btn-outline-primary waves-effect waves-light" type="submit" name="support">Support Binary</button>
                            @else
                                <button class="btn btn-outline-danger waves-effect waves-light" type="submit" name="abbandon">Abbandon Binary</button>
                            @endif
                        </form>
                    </div>
                    <br>
                    <form action="/dashboard/bin/update/{{ $bin->id }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <div class="form-group btn btn-light btn-round px-5 mx-auto d-block">
                                <label for="avatar">File</label>
                                <input type="file" class="form-control" name="file">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="fullname">Game</label>
                            <input type="text" name="game" class="form-control form-control-rounded" id="game" placeholder="{{ $bin->game }}" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Target Process</label>
                            <input type="text" name="target" class="form-control form-control-rounded" id="target" placeholder="{{ $bin->target }}" required>
                        </div>
                        <div class="form-group">
                            <label for="username">Version</label>
                            <input type="text" name="version" class="form-control form-control-rounded" id="version" placeholder="{{ $bin->version }}" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Version Machine</label>
                            <input type="text" name="version_machine" class="form-control form-control-rounded" id="version_machine" placeholder="{{$bin->version_machine}}" required>
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