<?php

namespace App\Livewire\Home;

use Illuminate\Database\Eloquent\Collection;
use App\Models\Skill;
use Livewire\Component;

class Skills extends Component
{
    /**
     * @var Collection<Skill>|null
     */
    public $skills = null;

    public function render()
    {
        return view('components.home.skills');
    }

    public function mount()
    {
        $this->skills = Skill::orderBy('created_at')->get();
    }
}
