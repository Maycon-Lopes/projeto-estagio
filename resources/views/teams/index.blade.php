<div>
    <p>o nome do time é </p>
    @foreach ($teams as $team) 
        <p>o seu time é {{ $team->name }}</p>
    @endforeach
</div>
