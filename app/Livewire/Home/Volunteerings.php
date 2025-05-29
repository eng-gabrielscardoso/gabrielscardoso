<?php

namespace App\Livewire\Home;

use App\Models\Volunteering;
use Livewire\Component;

class Volunteerings extends Component
{
    /**
     * @var \Illuminate\Database\Eloquent\Collection<Volunteering>|null
     */
    public $volunteerings = null;

    public function render()
    {
        return view('components.home.volunteerings', [
            'volunteerings' => $this->volunteerings,
        ]);
    }

    public function mount()
    {
        $this->volunteerings = Volunteering::orderBy('start_date', 'desc')->get();
    }
}
