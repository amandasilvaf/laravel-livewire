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
        <p>User {{$tweet->user->name}} | Tweet: {{$tweet->content}}</p>
    @endforeach

</div>
