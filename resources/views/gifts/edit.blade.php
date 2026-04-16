<h1>modifier le cadeau : {{ $gift->name }}</h1>

<form action="{{ route('gifts.update', $gift->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label for="name">nom :</label><br>
    <input type="text" name="name" id="name" value="{{ old('name', $gift->name) }}">
    @error('name') <p style="color:red;">{{ $message }}</p> @enderror
    <br><br>

    <label for="url">lien :</label><br>
    <input type="text" name="url" id="url" value="{{ old('url', $gift->url) }}">
    @error('url') <p style="color:red;">{{ $message }}</p> @enderror
    <br><br>

    <label for="details">détails :</label><br>
    <textarea name="details" id="details">{{ old('details', $gift->details) }}</textarea>
    @error('details') <p style="color:red;">{{ $message }}</p> @enderror
    <br><br>

    <label for="price">price :</label><br>
    <input type="number" step="0.01" name="price" id="price" value="{{ old('price', $gift->price) }}">
    @error('price') <p style="color:red;">{{ $message }}</p> @enderror
    <br><br>

    <button type="submit">edit</button>
</form>

<br>
<a href="{{ route('gifts.index') }}">annuler</a>