<?php

namespace Database\Seeders;

use App\Models\Classroom;
use App\Models\Student;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([]);
        Classroom::factory(20)->create();
        Student::factory(20)->create();

        // Tambahkan pemanggilan seeder Subjects dan Teachers di sini
        $this->call([
            SubjectSeeder::class,
            TeacherSeeder::class,
        ]);
    }
}
