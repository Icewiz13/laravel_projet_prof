@extends("layouts.main")

@section("title")
<title>Editer Produit | EPG</title>
@endsection

@section("content")
<form action="/update-produit" method="POST">
    <label for="">Designation</label>
    <input type="text" name="des" value="{{ $produit->designation }}" />
    <br />
    <br />
    <label for="">Prix</label>
    <input type="number" name="prix" value="{{ $produit->prix }}" />
    <br />
    <br />
    <label for="">Quantite</label>
    <input type="number" name="qte" value="{{ $produit->qte }}" />
    <br />
    <br />
    <label for="">Catégorie</label>
    <select name="" id="" >
        @foreach ($categories as $item)
        <option value="{{$item->id}}" {{($item->id == $produit->c_id ? 'selected': '');}}>{{$item->nom}}</option>
    </select>
    <br />
    <br />
    <input type="submit" value="Enregistrer" />
    <input type="hidden" name="id" value="{{ $produit->id }}" />
    @csrf

    @if(($errors->any()))
    <span style="color: red;"> Veuillez remplir tous les champs !</span>
    @endif
</form>
@endsection