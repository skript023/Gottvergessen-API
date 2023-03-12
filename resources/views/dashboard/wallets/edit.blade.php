<div class="col-lg-8 mx-auto my-4">
    <div class="card">
        <div class="card-body">
            <div class="card-title">Update Wallet History</div>
            <hr>
            @foreach ($wallets as $wallet)
                @if ($wallet->id == request()->wallet)
                    <form action="/dashboard/wallet/update/{{ $wallet->id }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="name">Wallet</label>
                            <input type="text" name="name" class="form-control form-control-rounded" id="name" value="{{ $wallet->name }}" required>
                        </div>
                        <div class="form-group">
                            <label for="symbol">Symbol</label>
                            <input type="text" name="symbol" class="form-control form-control-rounded" id="symbol" value="{{ $wallet->symbol }}" required>
                        </div>
                        <div class="form-group">
                            <label for="currency">Currency</label>
                            <input type="text" name="currency" class="form-control form-control-rounded" id="currency" value="{{ $wallet->currency }}" required>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-light btn-round px-5 mx-auto d-block"><i class="icon-lock"></i>Update Wallet</button>
                        </div>
                    </form>
                @endif
            @endforeach
        </div>
    </div>
</div>