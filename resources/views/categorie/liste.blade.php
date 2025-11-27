@extends("layouts.main")

@section("title")
<title>Liste Catégories | EPG</title>
@endsection

@section("content")
<table border="1" cellspacing="0" cellpadding="5">
    <thead>
        <tr>
            <th>Nom</th>
            <th>Option</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $item)
        <tr>
            <td>{{ $item->nom }}</td>
            <td>
                <form action="del-categorie" method="post">
                    @csrf
                    <input type="submit" value="Supprimer" />
                    <input type="hidden" name="id" value="{{ $item->id }}" />
                </form>
                <form action="edit-categorie" method="post">
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