<?php

use App\Livewire\Home\Headline;
use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test(Headline::class)
        ->assertStatus(200);
});
