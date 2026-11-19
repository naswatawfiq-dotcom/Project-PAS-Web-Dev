<?php

use App\Models\Classroom;
use App\Models\Student;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

test('student page shows classroom names from stored student records', function () {
    Classroom::factory()->create([
        'name' => '11 DKV 1',
        'major' => 'DKV',
    ]);

    Student::factory()->create([
        'name' => 'Siswa DKV',
        'classroom' => '11 DKV 1',
        'major' => 'DKV',
    ]);

    $this->get('/admin/student')
        ->assertSee('Siswa DKV')
        ->assertSee('11 DKV 1')
        ->assertDontSee('XII RPL 1');
});
