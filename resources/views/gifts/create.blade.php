<h1>ajouter un cadeau</h1>

<form action="{{ route('gifts.store') }}" method="POST">
    @csrf

    <label for="name">nom :</label><br>
    <input type="text" name="name" id="name" value="{{ old('name') }}">
    @error('name') <p style="color:red;">{{ $message }}</p> @enderror
    <br><br>

    <label for="url">lien:</label><br>
    <input type="text" name="url" id="url" value="{{ old('url') }}">
    @error('url') <p style="color:red;">{{ $message }}</p> @enderror
    <br><br>

    <label for="details">détails :</label><br>
    <textarea name="details" id="details">{{ old('details') }}</textarea>
    @error('details') <p style="color:red;">{{ $message }}</p> @enderror
    <br><br>

    <label for="price">prix :</label><br>
    <input type="number" step="0.01" name="price" id="price" value="{{ old('price') }}">
    @error('price') <p style="color:red;">{{ $message }}</p> @enderror
    <br><br>

    <button type="submit">enregistrer</button>
</form>

<br>
<a href="{{ route('gifts.index') }}">annuler</a>