<?php

namespace App\Http\Livewire;

use App\Models\Tweet;
use Livewire\Component;

class ListTweets extends Component
{
    public $content = 'Oi, Livewire!!';


    public function render()
    {
        $tweets = Tweet::with('user')->get();
        return view('livewire.list-tweets', compact('tweets'));
    }
}
