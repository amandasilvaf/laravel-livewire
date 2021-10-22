<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ListTweets extends Component
{
    public $content = 'Oi, Livewire!!';


    public function render()
    {
        return view('livewire.list-tweets');
    }
}
