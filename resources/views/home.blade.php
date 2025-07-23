@extends( 'layouts.basic' )
@section( 'Home' )
<body class="bg-amber-400">
    <div id="alerts" class="fixed top-5 right-5 z-50"></div>
    <main class="min-h-screen pt-16">
        <!-- Hero Section -->
        <x-herosection/>

        <!-- Menu Section -->
        <x-menusection :packs="$populairepack"/>

        <!-- About Section -->
        <x-aboutsection/>
    </main>


@endsection