<?php

namespace App\Livewire;

use Illuminate\Database\Eloquent\Collection;
use App\Models\Project;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Projects')]
class Projects extends Component
{
    /**
     * @var Collection<Project>|null
     */
    public $projects = null;

    public function render()
    {
        return view('projects', [
            'projects' => $this->projects,
            'totalProjects' => $this->projects ? $this->projects->count() : 0,
            'activeProjects' => $this->projects ? $this->projects->whereNull('end_date')->count() : 0,
        ]);
    }

    public function mount()
    {
        $this->projects = Project::orderBy('start_date', 'desc')->get();
    }
}
