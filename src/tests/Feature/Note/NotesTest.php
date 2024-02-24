<?php

use App\Models\Note;

test('create notes', function () {
    Note::factory(5)->create();

    $response = $this->get('/api/notes');

    $response->assertStatus(200);
    $response->assertJsonCount(5, 'data');
});

test('get note', function () {
    Note::factory()->create();

    $response = $this->get('/api/notes/1/');
    dd($response);
    $response->assertStatus(200);
});

