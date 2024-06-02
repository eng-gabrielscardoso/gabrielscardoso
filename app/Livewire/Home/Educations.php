<?php

namespace App\Livewire\Home;

use App\Models\Education;
use Livewire\Component;

class Educations extends Component
{
    /**
     * @var \Illuminate\Database\Eloquent\Collection<Education>|null
     */
    public $educations;

    public function render()
    {
        return view('components.home.educations', [
            'educations' => $this->educations,
        ]);
    }

    public function mount()
    {
        $this->educations = Education::all();
    }
}
