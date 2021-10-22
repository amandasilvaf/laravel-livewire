<div>

    <h1 class="text-center">{{ $content }}</h1>
    <hr>
    <div class="form-group">
        <label for="content" class="form-label">Novo valor para a variável content</label>
        <input type="text" class="form-control" name="content" id="content" wire:model="content"></input>
    </div>   
    <hr>
    <h3>Tweets</h3>

    @foreach ($tweets as $tweet)
        <p>User {{$tweet->user->name}} | Tweet: {{$tweet->content}}</p>
    @endforeach

</div>
