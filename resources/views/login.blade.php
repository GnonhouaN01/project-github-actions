@extends("layout")

@section("content")

<div class="w-full max-w-md bg-white p-6 rounded-lg shadow-lg">
    <h1 class="text-2xl font-bold mb-4 text-center">Connexion</h1>

    @if(session('error'))
        <p class="text-red-500 mb-3 text-center">{{ session('error') }}</p>
    @endif

    <form action="/login" method="POST" class="space-y-4">
        @csrf
        <input class="w-full p-2 border rounded" type="email" name="email" placeholder="Email">
        <input class="w-full p-2 border rounded" type="password" name="password" placeholder="Mot de passe">

        <button class="w-full bg-blue-600 hover:bg-blue-700 text-white p-2 rounded">
            Se connecter
        </button>
    </form>
    <a href="{{route('auth.register')}}">je n'est pas de compte <span class="d-flex justify-center text-blue-400">s'inscrire</span></a>
</div>

@endsection
