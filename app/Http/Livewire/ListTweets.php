<?php

namespace App\Http\Livewire;

use App\Models\Tweet;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class ListTweets extends Component
{
    use WithPagination;

    public $message = 'Oi, Livewire!!';

    public $content = 'valor do tweet';

    protected $rules = [
        'content' => 'required|min:3|max:255',

    ];

    public function render()
    {
        $tweets = Tweet::with('user')->paginate(10);
        return view('livewire.list-tweets', compact('tweets'));
    }

    public function create(){
        //dd('ListTweets.create()');
        //dd($this->content);
        
        $this -> validate();

        Tweet::create([
            'user_id' => Auth::id(),
            'content' => $this->content
        ]);

        $this->content = "";
    }

    public function like($tweet_id)
    {
        $tweet = Tweet::find($tweet_id);

        $tweet->likes()->create([
            'user_id' => Auth::id()
        ]);
    }

    public function unlike($tweet_id)
    {
        $tweet = Tweet::find($tweet_id);

        $tweet->likes()->delete();
    }

}
