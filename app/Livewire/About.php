<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('About')]
class About extends Component
{
    public function render()
    {
        return view('about', [
            'biography' => User::first()->biography ?? 'No biography available.',
        ]);
    }

    public function redirectToContact()
    {
        return redirect()->to('/contact');
    }
}
