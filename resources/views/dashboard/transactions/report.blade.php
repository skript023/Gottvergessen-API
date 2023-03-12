<table>
    <thead>
    <tr>
        <th>Judul</th>
        <th>Keterangan</th>
        <th>Kantor</th>
        <th>Jenis Uang</th>
        <th>Pengeluaran</th>
        <th>Pemasukan</th>
        <th>Tanggal</th>
    </tr>
    </thead>
    <tbody>
    @foreach($transactions as $transaction)
        <tr>
            <td>{{ $transaction->title }}</td>
            <td>{{ $transaction->description }}</td>
            <td>{{ $transaction->office }}</td>
            <td>{{ $transaction->type }}</td>
            <td>{{ $transaction->expenditure }}</td>
            <td>{{ $transaction->income }}</td>
            <td>{{ $transaction->transaction_date }}</td>
        </tr>
    @endforeach
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td>Total</td>
        <td>{{ $total_income }}</td>
        <td>{{ $total_expenditure }}</td>
    </tr>   
    </tbody>
</table>