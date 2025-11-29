<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Dashbord</title>
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

