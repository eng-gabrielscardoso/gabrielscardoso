<?php

use App\Livewire\Welcome;
use Livewire\Livewire;

test('the component should render successfully', function () {
    Livewire::test(Welcome::class)->assertStatus(200);
});
