<?php

use App\Livewire\Home\Skills;
use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test(Skills::class)
        ->assertStatus(200);
});
