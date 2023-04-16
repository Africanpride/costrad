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
        $images = $this->institute->getMedia('banner')->take(6)->skip(1);

        return view('livewire.institute-details', compact('images'));
    }
}
