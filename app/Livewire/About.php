<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('About')]
class About extends Component
{
    public function render()
    {
        return view('about');
    }

    public function redirectToContact()
    {
        return redirect()->to('/contact');
    }
}
