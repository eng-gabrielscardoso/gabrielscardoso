<?php

namespace App\Livewire\Home;

use App\Models\Experience;
use Livewire\Component;

class Experiences extends Component
{
    /**
     * @var \Illuminate\Database\Eloquent\Collection<Experience>|null
     */
    public $experiences = null;

    public function render()
    {
        return view('components.home.experiences', [
            'experiences' => $this->experiences,
        ]);
    }

    public function mount()
    {
        $this->experiences = Experience::orderBy('end_date')->get();
    }
}
