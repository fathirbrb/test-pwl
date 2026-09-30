<?php

namespace App\Http\Controllers;

use App\Models\MataKuliah;
use Illuminate\Http\Request;

class MataKuliahController extends Controller
{
    // Menampilkan daftar semua mata kuliah (READ)
    public function index()
    {
        $data = [
            'title' => 'List Mata Kuliah',
            'mks' => MataKuliah::all(),
        ];

        return view('list_mk', $data);
    }

    // Menampilkan halaman form (CREATE)
    public function create()
    {
        return view('create_mk', ['title' => 'Create Mata Kuliah']);
    }

    // Menyimpan data dari form ke database (CREATE)
    public function store(Request $request)
    {
        MataKuliah::create([
            'nama_mk' => $request->input('nama_mk'),
            'sks' => $request->input('sks'),
        ]);

        return redirect()->to('/matakuliah');
    }
}