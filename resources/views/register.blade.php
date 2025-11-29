@extends("layout")

@section("content")

<div class="w-full max-w-md bg-white p-6 rounded-lg shadow-lg">
    <h1 class="text-2xl font-bold mb-4 text-center">Inscription</h1>

    <form action="/register" method="POST" class="space-y-4">
        @csrf
        <input class="w-full p-2 border rounded" type="text" name="name" placeholder="Nom">
        <input class="w-full p-2 border rounded" type="email" name="email" placeholder="Email">
        <input class="w-full p-2 border rounded" type="password" name="password" placeholder="Mot de passe">

        <button class="w-full bg-green-600 hover:bg-green-700 text-white p-2 rounded">
            S'inscrire
        </button>
    </form>
    <a href="{{route('auth.login')}}">j'ai un compte <span class="text-blue-400">se connecter</span></a>
</div>

@endsection