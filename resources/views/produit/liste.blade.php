@extends("layouts.main")

@section("title")
<title>Liste Produit | EPG</title>
@endsection

@section("content")
<table border="1" cellspacing="0" cellpadding="5">
    <thead>
        <tr>
            <th>Designation</th>
            <th>Prix</th>
            <th>Quantite</th>
            <th>Catégorie</th>
            <th>Option</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $item)
        <tr>
            <td>{{ $item->designation }}</td>
            <td>{{ $item->prix }} DH</td>
            <td>{{ $item->qte }}</td>
            <td>{{ $item->categorie->nom }}</td>
            <td>
                <form action="del-produit" method="post">
                    @csrf
                    <input type="submit" value="Supprimer" />
                    <input type="hidden" name="id" value="{{ $item->id }}" />
                </form>
                <form action="edit-produit" method="post">
                    @csrf
                    <input type="submit" value="Edit" />
                    <input type="hidden" name="id" value="{{ $item->id }}" />
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection