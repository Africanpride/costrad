<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Institute;

class InstituteDetails extends Component
{
    public Institute $institute;

    public function mount(Institute $institute)
    {
        $this->institute = $institute;

    }

    public function render()
    {
        return view('livewire.institute-details');
    }
}
