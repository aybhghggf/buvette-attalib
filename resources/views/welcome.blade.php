<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="description" content="Commandez en ligne vos snacks préférés à la Buvette Attalib. Livraison rapide de msemen, harira, bocadillos et jus naturels.">
    <title>Buvette Attalib - Livraison de Snacks Marocains pour Étudiants</title>

    <!-- Preload critical resources -->
    <link rel="preload" href="https://cdn.tailwindcss.com?plugins=forms,container-queries" as="script">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- Fonts and Icons -->
    <link href="https://fonts.googleapis.com/css2?family=Kalam:wght@700&family=Poppins:wght@400;700;900&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet"/>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body class="bg-amber-400">
    <!-- Header with working mobile menu -->
    <x-navbar/>

    <main class="min-h-screen pt-16">
        <!-- Hero Section -->
        <x-herosection/>

        <!-- Menu Section -->
        <x-menusection/>

        <!-- About Section -->
        <x-aboutsection/>
    </main>

    <!-- Footer -->
    <x-footer/>

    <!-- JavaScript -->
    <script src="{{ asset('js/script1.js') }}"></script>
</body>
</html>
