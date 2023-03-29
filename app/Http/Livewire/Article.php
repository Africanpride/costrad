<?php

namespace App\Http\Livewire;

use App\Models\Newsroom;
use Livewire\Component;

class Article extends Component
{
    public Newsroom $newsroom;

    public function mount(Newsroom $newsroom)
    {
        $this->newsroom = $newsroom;

    }

    public function render()
    {

        return view('livewire.article');
    }
}
