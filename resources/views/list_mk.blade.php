@extends('layouts.app')

@section('content')
    <div class="container my-4">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h1>Daftar Mata Kuliah</h1>
            <a href="{{ route('matakuliah.create') }}" class="btn btn-success">+ Tambah Mata Kuliah Baru</a>
        </div>

        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>ID (UUID)</th>
                    <th>Nama Mata Kuliah</th>
                    <th>SKS</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($mks as $mk)
                    <tr>
                        <td><code>{{ $mk->id }}</code></td>
                        <td>{{ $mk->nama_mk }}</td>
                        <td>{{ $mk->sks }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="text-center">Belum ada data mata kuliah.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection