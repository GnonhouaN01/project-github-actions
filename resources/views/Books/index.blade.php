@extends("layout")

@section("content")
<h2 class="text-2xl font-bold mb-4">Liste des livres</h2>

<form action="/books" method="POST" class="space-y-3 mb-6">
    @csrf
    <input type="text" name="title" class="w-full p-2 border rounded" placeholder="Titre">
    <input type="text" name="author" class="w-full p-2 border rounded" placeholder="Auteur">

    <button class="bg-green-600 text-white px-4 py-2 rounded">
        Ajouter un livre
    </button>
</form>

<div class="grid grid-cols-1 md:grid-cols-2 gap-4">
    @foreach($books as $book)
    <div class="bg-white p-4 rounded shadow">
        <h3 class="text-xl font-bold">{{ $book->title }}</h3>
        <p class="text-gray-600">Auteur : {{ $book->author }}</p>
    </div>
    @endforeach
</div>
@endsection
