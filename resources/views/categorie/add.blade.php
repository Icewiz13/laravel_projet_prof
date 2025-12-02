@extends("layouts.main")

@section("title")
<title>Ajouter Catégorie | EPG</title>
@endsection

@section("content")
<form action="/store-categorie" method="POST">
    <label for="">Nom</label>
    <input type="text" name="nom" value="{{ old('nom') }}" />
    <br />
    <br />
    <input type="submit" value="Enregistrer" />
    @csrf

    @if(($errors->any()))
    <span style="color: red;"> Veuillez remplir tous les champs !</span>
    @endif
</form>
@endsection