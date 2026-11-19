<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Classroom;

class ClassroomController extends Controller
{
    public function index()
    {
        $classrooms = Classroom::all();

        return view('admin.classroom', compact('classrooms'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'major' => 'required|string|max:255',
        ]);

        Classroom::create([
            'name' => $request->name,
            'major' => $request->major,
        ]);

        return redirect()->route('admin.classrooms.index')->with('success', 'Data kelas berhasil ditambahkan!');
    }

    public function destroy($id)
    {
        $classroom = Classroom::findOrFail($id);
        $classroom->delete();

        return redirect()->route('admin.classrooms.index')->with('success', 'Data kelas berhasil dihapus!');
    }
}
