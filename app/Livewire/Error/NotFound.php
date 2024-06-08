<?php

namespace App\Livewire\Error;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Not Found')]
#[Layout('components.layouts.error')]
class NotFound extends Component
{
    public function render()
    {
        return view('components.error.not-found');
    }

    public function redirectToHome()
    {
        return redirect()->to('/');
    }
}
