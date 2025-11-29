<!DOCTYPE html>
<html lang="fr">
<head>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 min-h-screen">

<nav class="bg-blue-600 p-4 text-white text-center">
    <h1 class="text-xl font-bold">Mini Bibliothèque</h1>
</nav>

<div class="p-6">
    @yield('content')
</div>

</body>
</html>
