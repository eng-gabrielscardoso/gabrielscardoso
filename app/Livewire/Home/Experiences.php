<?php

namespace App\Livewire\Home;

use Illuminate\Database\Eloquent\Collection;
use App\Models\Experience;
use Livewire\Component;

class Experiences extends Component
{
    /**
     * @var Collection<Experience>|null
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
        $this->experiences = Experience::orderBy('start_date', 'desc')->get();
    }
}
