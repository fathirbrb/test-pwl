@extends('layouts.app')

@section('content')
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Daftar Pengguna</h2>
        <a href="{{ route('user.create') }}" class="btn btn-primary">+ Tambah Pengguna</a>
    </div>

    {{-- Panggil Komponen Tabel Dinamis --}}
    @include('components.user-table', ['users' => $users])
@endsection