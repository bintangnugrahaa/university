<?php

namespace App\Http\Controllers\Registration;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;

class RegistrationController extends Controller
{
    // Menampilkan halaman pendaftaran
    public function index()
    {
        return view('pendaftaran');
    }

    public function store(Request $request)
    {
        $request->validate([
            'namalengkap' => 'required|string|max:255',
            'email' => 'required|email|unique:students,email',
            'jalur' => 'required|string',
            'image' => 'required|image|mimes:jpg,jpeg,png|max:2048',
            'namapanggilan' => 'required|string|max:255',
            'nomor_hp' => 'required|string|max:15',
            'programstudi_1' => 'required|string',
            'programstudi_2' => 'required|string',
        ]);

        $fotoName = null;
        if ($request->hasFile('image')) {
            $fotoName = time() . '_' . $request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs('', $fotoName, 'public');
            if (!$path) {
                return back()->with('error', 'Gambar gagal disimpan!');
            }
        }

        Student::create([
            'full_name' => $request->input('namalengkap'),
            'nickname' => $request->input('namapanggilan'),
            'email' => $request->input('email'),
            'phone_number' => $request->input('nomor_hp'),
            'admission_path' => $request->input('jalur'),
            'image' => $fotoName,
            'first_study_program' => $request->input('programstudi_1'),
            'second_study_program' => $request->input('programstudi_2'),
        ]);

        return back()->with('success', 'Data berhasil ditambahkan!');
    }
}
