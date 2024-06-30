<?php

namespace App\Livewire;

use App\Models\Project;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Projects')]
class Projects extends Component
{
    /**
     * @var \Illuminate\Database\Eloquent\Collection<Project>|null
     */
    public $projects = null;

    public function render()
    {
        return view('projects', [
            'projects' => $this->projects,
        ]);
    }

    public function mount()
    {
        $this->projects = Project::orderBy('end_date')->get();
    }
}
