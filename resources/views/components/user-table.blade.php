<div class="table-responsive shadow-sm rounded">
    <table class="table table-striped table-hover align-middle mb-0">
        <thead class="table-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nama</th>
                <th scope="col">NPM / NIM</th>
                <th scope="col">Kelas</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->nama }}</td>
                    <td>{{ $user->nim }}</td>
                    <td><span class="badge bg-info text-dark">{{ $user->nama_kelas }}</span></td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="text-center text-muted py-3">Belum ada data pengguna.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>