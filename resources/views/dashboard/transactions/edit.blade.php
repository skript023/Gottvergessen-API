<div class="col-lg-8 mx-auto my-4">
    <div class="card">
        <div class="card-body">
            <div class="card-title">Update Transaction History</div>
            <hr>
            @foreach ($transactions as $transaction)
                @if ($transaction->id == request()->transaction)
                    <form action="/dashboard/transaction/update/{{ $transaction->id }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" name="title" class="form-control form-control-rounded" id="title" placeholder="{{ $transaction->title }}">
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <input type="text" name="description" class="form-control form-control-rounded" id="description" placeholder="{{ $transaction->description }}">
                        </div>
                        <div class="form-group">
                            <label for="income">Income</label>
                            <input type="text" name="income" class="form-control form-control-rounded" id="income" placeholder="{{ $transaction->income }}">
                        </div>
                        <div class="form-group">
                            <label for="expenditure">Expenditure</label>
                            <input type="text" name="expenditure" class="form-control form-control-rounded" id="expenditure" placeholder="{{ $transaction->expenditure }}">
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