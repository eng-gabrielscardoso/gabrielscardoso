<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Projects')]
class Projects extends Component
{
    public function render()
    {
        return view('projects');
    }
}
