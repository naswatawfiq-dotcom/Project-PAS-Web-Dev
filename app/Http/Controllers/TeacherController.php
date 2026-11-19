<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teachers = Teacher::all();
        // PERBAIKAN: Mengarah ke folder admin.teachers.index sesuai struktur foldermu
        return view('admin.teachers.index', compact('teachers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Karena menggunakan modal, method ini bisa dikosongkan atau diarahkan kembali
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input form modal tambah teacher
        $request->validate([
            'name' => 'required|string|max:255',
            'niy' => 'required|string|max:50|unique:teachers,niy',
            'subjects' => 'required|string|max:255',
            'start_date' => 'required|date',
        ]);

        // Simpan data ke database
        Teacher::create([
            'name' => $request->name,
            'niy' => $request->niy,
            'subjects' => $request->subjects,
            'start_date' => $request->start_date,
        ]);

        return redirect()->route('admin.teachers.index')->with('success', 'Data Teacher berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $teacher = Teacher::findOrFail($id);
        $teacher->delete();

        return redirect()->route('admin.teachers.index')->with('success', 'Data Teacher berhasil dihapus!');
    }
}
