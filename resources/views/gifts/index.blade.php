<h1>liste des cadeaux</h1>

<a href="{{ route('gifts.create') }}">ajouter un cadeau</a>

<ul>
    @foreach($gifts as $gift)
        <li>
            {{ $gift->name }} - {{ $gift->price }} €
            
            <a href="{{ route('gifts.show', $gift->id) }}">voir</a>
            <a href="{{ route('gifts.edit', $gift->id) }}">modifier</a>
            
            <form action="{{ route('gifts.destroy', $gift->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">supprimer</button>
            </form>
        </li>
    @endforeach
</ul>