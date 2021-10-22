<div>

    <h1 class="text-center">{{ $message }}</h1>
    <hr>
    <div class="form-group">
        <label for="content" class="form-label">Novo valor para a variável content</label>
        <input type="text" class="form-control" name="content" id="content" wire:model="message"></input>
    </div>   

    <form method="POST" class="form" wire:submit.prevent="create">
        @csrf
       <div class="form-group">
            <input type="text" class="form-control" name="content" id="content" wire:model="content" placeholder="Tweet"></input>
            @error('content')
                {{ $message }}
            @enderror
            <button type="submit" class="btn btn-sm btn-primary">Tweetar</button>
       </div>
    </form>


    <hr>
    <h3>Tweets</h3>
    @foreach ($tweets as $tweet)

        User {{$tweet->user->name}} | Tweet: {{$tweet->content}}

        @if($tweet->likes->count())
            <a href="#" wire:click.prevent="unlike({{$tweet->id}})">Deslike</a>
        @else
            <a href="#" wire:click.prevent="like({{$tweet->id}})" >Like</a>
        @endif
        <hr>

    @endforeach
    <hr>

    <div>
        {{ $tweets->links() }}
    </div>


</div>
