@extends("layouts.main")

@section("title")
<title>Editer Catégorie | EPG</title>
@endsection

@section("content")
<form action="/update-categorie" method="POST">
    <label for="">nom</label>
    <input type="text" name="nom" value="{{ $categorie->nom }}" />
    <br />
    <br />
    <input type="submit" value="Enregistrer" />
    <input type="hidden" name="id" value="{{ $categorie->id }}" />
    @csrf

    @if(($errors->any()))
    <span style="color: red;"> Veuillez remplir tous les champs !</span>
    @endif
</form>
@endsection