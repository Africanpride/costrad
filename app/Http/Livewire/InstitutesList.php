<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Institute;

class InstitutesList extends Component
{
    public function render()
    {
        $institutesFirst = Institute::take(4);
        return view('livewire.institutes-list');
    }
}
