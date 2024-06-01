<?php

use App\Livewire\Contact;
use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test(Contact::class)
        ->assertStatus(200);
});
