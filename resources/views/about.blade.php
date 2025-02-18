<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>À propos - Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <script src="https://cdn.tailwindcss.com"></script>
    @endif
</head>
<body class="bg-gray-100 text-gray-900 dark:bg-gray-900 dark:text-gray-100">

    <div class="container mx-auto px-6 py-12">
        <header class="flex justify-between items-center mb-8">
            <h1 class="text-3xl font-bold">À propos de nous</h1>
            <a href="{{ url('/') }}" class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">Accueil</a>
        </header>

        <section class="bg-white shadow-lg rounded-lg p-6 dark:bg-gray-800">
            <h2 class="text-2xl font-semibold mb-4">Notre mission</h2>
            <p class="text-lg">
                Nous sommes passionnés par le développement web et nous nous efforçons de créer des solutions modernes et efficaces 
                pour aider les développeurs à réussir avec Laravel.
            </p>

            <h2 class="text-2xl font-semibold mt-6 mb-4">Pourquoi Laravel ?</h2>
            <p class="text-lg">
                Laravel est un framework PHP puissant et flexible, idéal pour créer des applications web performantes. 
                Il offre une syntaxe élégante, des outils robustes et une grande communauté de développeurs.
            </p>

            <h2 class="text-2xl font-semibold mt-6 mb-4">Nous contacter</h2>
            <p class="text-lg">
                Vous pouvez nous suivre sur les réseaux sociaux ou nous contacter par email à : 
                <a href="mailto:contact@exemple.com" class="text-blue-600 hover:underline">contact@exemple.com</a>
            </p>
        </section>
    </div>

</body>
</html>
