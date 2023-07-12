<table>
    <thead>
    <tr>
        <th>Kegiatan</th>
        <th>Tanggal Mulai</th>
        <th>Tanggal Selesai</th>
        <th>Status</th>
    </tr>
    </thead>
    <tbody>
    @foreach($activities as $activity)
        <tr>
            <td>{{ $activity->name }}</td>
            <td>{{ $activity->start_date }}</td>
            <td>{{ $activity->end_date }}</td>
            <td>{{ $activity->status }}</td>
        </tr>
    @endforeach
    </tbody>
</table>