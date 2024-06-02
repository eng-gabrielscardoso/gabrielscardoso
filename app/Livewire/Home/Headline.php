<?php

namespace App\Livewire\Home;

use Livewire\Component;

class Headline extends Component
{
    public function render()
    {
        return view('components.home.headline');
    }

    public function redirectToContact()
    {
        return redirect()->to('/contact');
    }
}
