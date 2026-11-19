<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Classroom; // <-- Jangan lupa import model Classroom
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::query()->get();
        $classrooms = Classroom::all(); // <-- Ambil semua data kelas

        // Kirim variabel $classrooms ke view admin.student.index
        return view('admin.student.index', compact('students', 'classrooms'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi data input menggunakan 'classroom' (string)
        $request->validate([
            'name' => 'required|string|max:255',
            'nis' => 'required|string|unique:students,nis',
            'classroom' => 'required|string|max:255', // <-- Menggunakan 'classroom'
            'major' => 'required|string',
            'address' => 'required|string',
            'status' => 'required|string',
        ]);

        // Menyimpan data siswa baru ke database
        Student::create([
            'name' => $request->name,
            'nis' => $request->nis,
            'classroom' => $request->classroom, // <-- Simpan string nama kelas
            'major' => $request->major,
            'address' => $request->address,
            'status' => $request->status,
        ]);

        return redirect()->back()->with('success', 'Data siswa berhasil ditambahkan!');
    }

    public function destroy($id)
    {
        $student = Student::findOrFail($id);
        $student->delete();

        return redirect()->back()->with('success', 'Data siswa berhasil dihapus!');
    }
}
