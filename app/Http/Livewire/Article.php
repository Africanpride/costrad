<?php

namespace App\Http\Livewire;

use App\Models\Newsroom;
use Livewire\Component;

class Article extends Component
{
    public Newsroom $newsroom;
    public $count = 2;



    public function mount(Newsroom $newsroom)
    {
        $this->newsroom = $newsroom;

    }
    public function increment()
    {
        $this->count++;
    }
    public function increase()
    {

        // $news = Newsroom::whereId($this->newsroom->id)->first();
        $this->newsroom->increment('like',1);
        // $this->newsroom->save();
    }


    public function render()
    {

        return view('livewire.article');
    }
}
