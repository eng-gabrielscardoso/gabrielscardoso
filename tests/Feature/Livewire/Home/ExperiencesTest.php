<?php

use App\Livewire\Home\Experiences;
use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test(Experiences::class)
        ->assertStatus(200);
});
