@extends("layouts.main")

@section("title")
<title>Ajouter Produit | EPG</title>
@endsection

@section("content")
<form action="/store-produit" method="POST">
    <label for="">Designation</label>
    <input type="text" name="des" value="{{ old('des') }}" />
    <br />
    <br />
    <label for="">Prix</label>
    <input type="number" name="prix" value="{{ old('prix') }}" />
    <br />
    <br />
    <label for="">Quantite</label>
    <input type="number" name="qte" value="{{ old('qte') }}" />
    <br />
    <br />
    
    <label for="categorie">Catégorie</label>
<select name="c_id" id="categorie">
    @foreach ($categories as $item)
        <option value="{{ $item->id }}">{{ $item->nom }}</option>
    @endforeach
</select>
    <br />
    <br />
    <input type="submit" value="Enregistrer" />
    @csrf

    @if(($errors->any()))
    <span style="color: red;"> Veuillez remplir tous les champs !</span>
    @endif
</form>
@endsection