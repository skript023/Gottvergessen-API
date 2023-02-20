
<div class="card col-lg-6 mx-auto my-4">
    <div class="card-content p-2">
        <div class="card-body">
            <div class="card-title text-uppercase text-center py-3">Add Transaction</div>
            <form action="/dashboard/transaction/add" method="post">
                @csrf
                <label for="input-6">Type</label>
                <select id="type" name="type" class="form-control text-center mb-3">
                    <option class="bg-dark-light" value="">--- Select type ---</option>
                    @foreach ($wallets as $key => $wallet)
                        <option class="bg-dark-light" value="{{ $wallet->symbol }}">{{ $wallet->name }}</option>
                    @endforeach
                </select>
                <div class="form-group">
                    <label for="input-6">Office</label>
                    <input type="text" name="office" class="form-control form-control-rounded" id="input-6" placeholder="Enter Office" required>
                </div>
                <div class="form-group">
                    <label for="input-6">Title</label>
                    <input type="text" name="title" class="form-control form-control-rounded" id="input-6" placeholder="Enter Title" required>
                </div>
                <div class="form-group">
                    <label for="input-6">Description</label>
                    <input type="text" name="description" class="form-control form-control-rounded" id="input-6" placeholder="Enter Description" required>
                </div>
                <div class="form-group">
                    <label for="input-6">Income</label>
                    <input type="text" name="income" class="form-control form-control-rounded" id="input-6" placeholder="Enter Income">
                </div>
                <div class="form-group">
                    <label for="input-7">Expenditure</label>
                    <input type="text" name="expenditure" class="form-control form-control-rounded" id="input-7" placeholder="Enter Expenditure">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-light btn-round px-5 mx-auto d-block"><i class="icon-lock"></i> Add Transaction</button>
                </div>
            </form>
        </div>
    </div>
</div>
