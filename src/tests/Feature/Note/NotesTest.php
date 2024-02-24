<?php

use App\Models\Note;

test('create notes', function () {
    Note::factory(5)->create();

    $response = $this->get('/api/notes');

    $response->assertStatus(200);
    $response->assertJsonCount(5, 'data');
});

test('get note', function () {
    Note::factory()->create(['id' => 6]);

    $response = $this->get('/api/notes/6');
    $response->assertStatus(200);
});

test('update note', function () {
    $note = Note::factory()->create();

    $newData = [
        'title' => 'Updated Title',
        'content' => 'Updated Content',
        'draft' => true,
    ];

    $response = $this->put('/api/notes/' . $note->id, $newData);

    $response->assertStatus(200);

    $updatedNote = Note::find($note->id);
    $this->assertEquals($newData['title'], $updatedNote->title);
    $this->assertEquals($newData['content'], $updatedNote->content);
    $this->assertEquals($newData['draft'], $updatedNote->draft);
});

test('delete note', function () {
    $note = Note::factory()->create();

    $response = $this->delete('/api/notes/' . $note->id);

    $response->assertStatus(204);
});