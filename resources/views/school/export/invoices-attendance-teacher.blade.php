<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Tanggal</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Nomer Telepon</th>
            <th>Jenis Kelamin</th>
            <th>Status</th>
            <th>Masuk</th>
            <th>Keluar</th>
            <th>Bukti</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($items as $item)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ \Carbon\Carbon::parse($item->created_at)->format('d-m-y') }}</td>
            <td>{{ $item->employee->user->name }}</td>
            <td>{{ $item->employee->user->email }}</td>
            <td>{{ $item->employee->phone_number }}</td>
            <td>{{ $item->employee->gender == 'male' ? 'Laki Laki' : 'Perempuan'}}</td>
            <td>{{ $item->status == 'present' ? 'Masuk' : ($item->status == 'sick' ? 'Sakit' : ($item->status == 'alpha' ? 'Alpha' : ($item->status == 'permit' ? 'Izin' : ''))) }}</td>
            <td>{{ \Carbon\Carbon::parse($item->checkin)->format('H:i') }}</td>
            <td>{{ \Carbon\Carbon::parse($item->checkout)->format('H:i') }}</td>
            <td>{{ $item->proof != null ? $item->proof : 'Tidak ada' }}</td>
        </tr>
        @empty
        @endforelse
    </tbody>
</table>
