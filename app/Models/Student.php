<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    /** @use HasFactory<\Database\Factories\StudentFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'nis',
        'classroom_id', // Diperbarui dari 'classroom' ke 'classroom_id'
        'major',
        'address',
        'status',       // Menambahkan 'status' agar bisa disimpan ke database
    ];

    /**
     * Relasi ke model Classroom (Satu siswa milik satu kelas)
     */
    public function classroom()
    {
        return $this->belongsTo(Classroom::class);
    }
}
