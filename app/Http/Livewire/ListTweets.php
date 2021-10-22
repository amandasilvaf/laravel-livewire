<?php

namespace App\Http\Livewire;

use App\Models\Tweet;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ListTweets extends Component
{
    public $message = 'Oi, Livewire!!';

    public $content = 'valor do tweet';

    public function render()
    {
        $tweets = Tweet::with('user')->get();
        return view('livewire.list-tweets', compact('tweets'));
    }

    public function create(){
        //dd('ListTweets.create()');
        //dd($this->content);
        
        Tweet::create([
            'user_id' => Auth::id(),
            'content' => $this->content
        ]);

        $this->content = "";
    }
}
