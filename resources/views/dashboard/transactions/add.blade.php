
<div class="card col-lg-6 mx-auto my-4">
    <div class="card-content p-2">
        <div class="card-body">
            <div class="card-title text-uppercase text-center py-3">Add Transaction</div>
            <form action="/dashboard/transaction/add" method="post">
                @csrf
                <div class="text-center">
                    <label for="input-6">Type</label>
                </div>
                <div class="form-group text-center">
                    <label class="mr-3">
                        <input type="radio" id="administrator" name="type" value="bank"> Bank
                    </label>
                    <label class="mr-auto">
                        <input type="radio" id="moderator" name="type" value="cash"> Cash
                    </label>
                </div>
                {{-- <label for="designation">Designation</label>
                <select id="designation" name="designation" class="form-control">
                    <option value="">--- Select designation ---</option>
                    <option value="EE">Test</option>
                </select> --}}
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
