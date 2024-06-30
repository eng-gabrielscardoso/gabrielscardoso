<?php

namespace App\Livewire\Home;

use App\Models\Education;
use Livewire\Component;

class Educations extends Component
{
    /**
     * @var \Illuminate\Database\Eloquent\Collection<Education>|null
     */
    public $educations = null;

    public function render()
    {
        return view('components.home.educations', [
            'educations' => $this->educations,
        ]);
    }

    public function mount()
    {
        $this->educations = Education::orderBy('end_date')->get();
    }
}
