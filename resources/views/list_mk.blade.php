@extends('layouts.app')

@section('content')
    <div class="container my-4">
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="d-flex justify-content-between align-items-center mb-3">
            <h1>Daftar Mata Kuliah</h1>
            <a href="{{ route('matakuliah.create') }}" class="btn btn-success">+ Tambah Mata Kuliah Baru</a>
        </div>

        <table class="table table-bordered table-striped align-middle">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>NAMA MATA KULIAH</th>
                    <th>SKS</th>
                    <th class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($mks as $mk)
                    <tr>
                        <td><code>{{ $mk->id }}</code></td>
                        <td>{{ $mk->nama_mk }}</td>
                        <td>{{ $mk->sks }}</td>
                        <td class="text-center">
                            <a href="{{ route('matakuliah.edit', $mk->id) }}" class="btn btn-sm btn-warning text-white me-1">Edit</a>
                            <form action="{{ route('matakuliah.destroy', $mk->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center">Belum ada data mata kuliah.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection