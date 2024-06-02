<?php

use App\Livewire\Home\Educations;
use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test(Educations::class)
        ->assertStatus(200);
});
