<?php

use App\Models\Subject;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

test('subject page displays stored subjects', function () {
    Subject::factory()->create([
        'name' => 'Matematika',
    ]);

    $this->get('/admin/subjects')
        ->assertOk()
        ->assertSee('Matematika');
});
