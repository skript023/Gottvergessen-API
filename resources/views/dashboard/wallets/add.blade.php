
<div class="card col-lg-6 mx-auto my-4">
    <div class="card-content p-2">
        <div class="card-body">
            <div class="card-title text-uppercase text-center py-3">Add New Wallet</div>
            <form action="/dashboard/wallets/add" method="post">
                @csrf
                <div class="form-group">
                    <label for="title">Wallet</label>
                    <input type="text" name="name" class="form-control form-control-rounded" id="name" placeholder="{{ $wallet->name }}">
                </div>
                <div class="form-group">
                    <label for="description">Symbol</label>
                    <input type="text" name="symbol" class="form-control form-control-rounded" id="symbol" placeholder="{{ $wallet->symbol }}">
                </div>
                <div class="form-group">
                    <label for="income">Currency</label>
                    <input type="text" name="currency" class="form-control form-control-rounded" id="currency" placeholder="{{ $wallet->currency }}">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-light btn-round px-5 mx-auto d-block"><i class="icon-lock"></i> Add New Wallet</button>
                </div>
            </form>
        </div>
    </div>
</div>
