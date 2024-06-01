<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Welcome')]
class Welcome extends Component
{
    public function render()
    {
        return view('welcome');
    }

    public function redirectToContact()
    {
        return redirect()->to('/contact');
    }
}
