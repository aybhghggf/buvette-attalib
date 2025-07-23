@extends('layouts.basic')

@section('AboutPage')
<style type="text/tailwindcss">
  :root {
    --brand-color: #E58D27;
    --background-color: #FDE047;
    --text-color: #4A2E1A;
    --card-bg: #FFFFFF;
  }

  body {
    font-family: 'Poppins', sans-serif;
    background-color: var(--background-color);
    color: var(--text-color);
  }

  .font-playfair {
    font-family: 'Playfair Display', serif;
  }

  .brand-text {
    color: var(--brand-color);
  }

  .brand-bg {
    background-color: var(--brand-color);
  }

  .card {
    @apply bg-[var(--card-bg)] rounded-2xl shadow-lg transition-all duration-300 hover:shadow-2xl hover:-translate-y-1;
  }

  .icon-box {
    @apply w-16 h-16 rounded-full bg-amber-100 flex items-center justify-center mb-4 mx-auto;
  }

  .floating-icon {
    @apply absolute text-[var(--brand-color)] opacity-10 z-0;
    font-size: 10rem;
  }
</style>

<!-- Font Awesome Icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<!-- Material Icons -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>

<body class="bg-[var(--background-color)] text-[var(--text-color)]">
  <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-16 md:py-24 mt-8 md:mt-12">
    <div class="max-w-6xl mx-auto">

      <!-- Header -->
      <header class="text-center mb-16">
        <div class="icon-box">
          <i class="fas fa-history text-3xl text-[var(--brand-color)]"></i>
        </div>
        <h1 class="font-playfair text-5xl md:text-7xl font-black text-[var(--text-color)]">Notre Histoire</h1>
        <p class="mt-4 text-xl text-gray-700">
          L'aventure gourmande de <span class="font-semibold brand-text">Buvette Attalib</span>
        </p>
      </header>

      <!-- Main Content -->
      <main class="space-y-16 md:space-y-24">

        <!-- Section: Notre Genèse -->
        <section class="grid md:grid-cols-2 gap-12 items-center relative">
          <div class="floating-icon -top-16 -left-16">
            <i class="fas fa-seedling"></i>
          </div>
          <div class="card p-8 md:p-10 order-2 md:order-1 relative z-10">
            <div class="flex items-center mb-4">
              <i class="fas fa-lightbulb text-3xl mr-3 brand-text"></i>
              <h2 class="font-playfair text-3xl font-bold brand-text">Notre Genèse</h2>
            </div>
            <p class="text-lg leading-relaxed text-gray-700">
              <strong>Buvette Attalib</strong> est une initiative née au cœur de l'OFPPT, portée par des étudiants passionnés et créatifs. Notre mission est simple : offrir un service de snacking marocain authentique, parfaitement adapté aux envies et aux besoins des étudiants de notre centre de formation.
            </p>
            <div class="mt-6 flex space-x-4">
              <span class="bg-amber-100 px-3 py-1 rounded-full text-sm font-medium text-[var(--brand-color)]">
                <i class="fas fa-users mr-1"></i> Communauté
              </span>
              <span class="bg-amber-100 px-3 py-1 rounded-full text-sm font-medium text-[var(--brand-color)]">
                <i class="fas fa-heart mr-1"></i> Passion
              </span>
            </div>
          </div>
          <div class="order-1 md:order-2 relative">
            <img
              alt="Thé à la menthe marocain traditionnel"
              class="rounded-2xl shadow-2xl w-full  object-cover"
              src="{{ asset('images/poster.png') }}"
            />
            <div class="absolute -bottom-4 -right-4 bg-[var(--brand-color)] text-white p-3 rounded-full shadow-lg">
              <i class="fas fa-mug-hot text-2xl"></i>
            </div>
          </div>
        </section>

        <!-- Section: Objectifs -->
        <section class="grid md:grid-cols-5 gap-12 items-center relative">
          <div class="floating-icon -bottom-16 -right-16">
            <i class="fas fa-bullseye"></i>
          </div>
          <div class="md:col-span-3 card p-8 md:p-10 relative z-10">
            <div class="flex items-center mb-4">
              <i class="fas fa-crosshairs text-3xl mr-3 brand-text"></i>
              <h2 class="font-playfair text-3xl font-bold brand-text">Nos Objectifs</h2>
            </div>
            <p class="text-lg leading-relaxed text-gray-700">
              Nous voulons créer un espace convivial où les étudiants peuvent facilement commander des délices marocains faits maison : msemmen chaud, harcha dorée, café parfumé ou thé à la menthe réconfortant. Le tout à des prix justes, sans jamais faire de compromis sur la qualité et le goût.
            </p>
            <ul class="mt-6 space-y-3">
              <li class="flex items-start">
                <i class="fas fa-check-circle text-[var(--brand-color)] mt-1 mr-2"></i>
                <span>Service rapide et efficace</span>
              </li>
              <li class="flex items-start">
                <i class="fas fa-check-circle text-[var(--brand-color)] mt-1 mr-2"></i>
                <span>Produits 100% naturels</span>
              </li>
              <li class="flex items-start">
                <i class="fas fa-check-circle text-[var(--brand-color)] mt-1 mr-2"></i>
                <span>Prix accessibles</span>
              </li>
            </ul>
          </div>
          <div class="md:col-span-2 flex justify-center items-center space-x-4">
            <div class="relative">
              <img
                alt="Préparation de Msemmen"
                class="shadow-xl w-40 h-40 object-cover transform -rotate-6 transition-transform hover:rotate-0 hover:scale-105 rounded-2xl"
                src="{{ asset('images/OFPPT.png') }}"
              />
              <div class="absolute -top-3 -right-3 bg-white p-2 rounded-full shadow-md">
                <i class="fas fa-school text-[var(--brand-color)]"></i>
              </div>
            </div>
            <div class="relative">
              <img
                alt="Harcha dorée"
                class="shadow-xl w-40 h-40 object-cover transform rotate-6 transition-transform hover:rotate-0 hover:scale-105 rounded-2xl"
                src="{{ asset('images/deliveryman.png') }}"
              />
              <div class="absolute -bottom-3 -left-3 bg-white p-2 rounded-full shadow-md">
                <i class="fas fa-shipping-fast text-[var(--brand-color)]"></i>
              </div>
            </div>
          </div>
        </section>

        <!-- Section: Valeurs -->
        <section class="bg-[var(--card-bg)] rounded-3xl p-10 md:p-16 shadow-xl relative overflow-hidden">
          <div class="floating-icon -top-16 -left-16">
            <i class="fas fa-star"></i>
          </div>
          <div class="floating-icon -bottom-16 -right-16">
            <i class="fas fa-star"></i>
          </div>
          <div class="relative z-10 text-center">
            <div class="icon-box inline-flex">
              <i class="fas fa-gem text-3xl text-[var(--brand-color)]"></i>
            </div>
            <h2 class="font-playfair text-4xl font-bold text-[var(--text-color)] mb-8">Nos Valeurs Fondamentales</h2>
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8 text-left">
              <div class="bg-amber-100 p-6 rounded-xl border-l-4 border-[var(--brand-color)] hover:bg-[var(--brand-color)] hover:text-white transition-all">
                <div class="text-4xl mb-3 text-[var(--brand-color)]">
                  <i class="fas fa-landmark"></i>
                </div>
                <h3 class="text-xl font-bold mb-2">Tradition</h3>
                <p class="">Valoriser les saveurs authentiques du Maroc.</p>
              </div>
              <div class="bg-amber-100 p-6 rounded-xl border-l-4 border-[var(--brand-color)] hover:bg-[var(--brand-color)] hover:text-white transition-all">
                <div class="text-4xl mb-3 text-[var(--brand-color)]">
                  <i class="fas fa-hand-holding-usd"></i>
                </div>
                <h3 class="text-xl font-bold mb-2">Accessibilité</h3>
                <p class="">Des prix pensés pour le budget étudiant.</p>
              </div>
              <div class="bg-amber-100 p-6 rounded-xl border-l-4 border-[var(--brand-color)] hover:bg-[var(--brand-color)] hover:text-white transition-all">
                <div class="text-4xl mb-3 text-[var(--brand-color)]">
                  <i class="fas fa-award"></i>
                </div>
                <h3 class="text-xl font-bold mb-2">Qualité</h3>
                <p class="">Des produits faits maison, frais et savoureux.</p>
              </div>
              <div class="bg-amber-100 p-6 rounded-xl border-l-4 border-[var(--brand-color)] hover:bg-[var(--brand-color)] hover:text-white transition-all">
                <div class="text-4xl mb-3 text-[var(--brand-color)]">
                  <i class="fas fa-people-carry"></i>
                </div>
                <h3 class="text-xl font-bold mb-2">Esprit d'équipe</h3>
                <p class="">Un projet collectif animé par des jeunes dynamiques.</p>
              </div>
            </div>
          </div>
        </section>

        <!-- Section: L'Équipe -->
        <section class="grid md:grid-cols-2 gap-12 items-center relative">
          <div class="relative">
            <img
              alt="Équipe d'étudiants travaillant sur un projet"
              class="rounded-2xl shadow-2xl w-full h-80 object-cover"
              src="{{ asset('images/teamspirit.png') }}"
            />
            <div class="absolute -bottom-4 -left-4 bg-white p-3 rounded-full shadow-lg flex">
              <i class="fas fa-user-friends text-2xl text-[var(--brand-color)]"></i>
              <span class="ml-2 font-bold">+3</span>
            </div>
          </div>
          <div class="card p-8 md:p-10">
            <div class="flex items-center mb-4">
              <i class="fas fa-users text-3xl mr-3 brand-text"></i>
              <h2 class="font-playfair text-3xl font-bold brand-text">L'Équipe</h2>
            </div>
            <p class="text-lg leading-relaxed text-gray-700">
              Ce projet a été initié par des étudiants en développement digital de l'OFPPT, dans le cadre du programme PIE. Chacun a apporté sa pierre à l'édifice : développement web, design, communication, gestion de projet… une véritable synergie de compétences.
            </p>
            <div class="mt-6 grid grid-cols-2 gap-4">
              <div class="flex items-center">
                <i class="fas fa-laptop-code text-[var(--brand-color)] mr-2"></i>
                <span>Développeurs</span>
              </div>
              <div class="flex items-center">
                <i class="fas fa-paint-brush text-[var(--brand-color)] mr-2"></i>
                <span>Designers</span>
              </div>
              <div class="flex items-center">
                <i class="fas fa-bullhorn text-[var(--brand-color)] mr-2"></i>
                <span>Community Managers</span>
              </div>
              <div class="flex items-center">
                <i class="fas fa-chart-line text-[var(--brand-color)] mr-2"></i>
                <span>Chefs de projet</span>
              </div>
            </div>
          </div>
        </section>

        <!-- Section: Vision -->
        <section class="text-center card p-10 md:p-16 relative">
          <div class="floating-icon -top-8 -right-8">
            <i class="fas fa-binoculars"></i>
          </div>
          <div class="icon-box mx-auto">
            <i class="fas fa-eye text-3xl text-[var(--brand-color)]"></i>
          </div>
          <h2 class="font-playfair text-4xl font-bold brand-text mb-4 flex items-center justify-center">
            Notre Vision
          </h2>
          <p class="max-w-3xl mx-auto text-lg leading-relaxed text-gray-700">
            Nous rêvons grand ! Nous voulons faire évoluer "Buvette Attalib" vers une plateforme complète avec commande en ligne et livraison au sein du centre. À terme, nous aspirons à développer une application mobile et à étendre ce concept à d'autres établissements de formation à travers le Maroc.
          </p>
          <div class="mt-8 flex justify-center space-x-4">
            <div class="bg-amber-50 p-4 rounded-lg">
              <i class="fas fa-mobile-alt text-2xl text-[var(--brand-color)]"></i>
              <p class="mt-2 font-medium">App Mobile</p>
            </div>
            <div class="bg-amber-50 p-4 rounded-lg">
              <i class="fas fa-map-marked-alt text-2xl text-[var(--brand-color)]"></i>
              <p class="mt-2 font-medium">Multi-sites</p>
            </div>
            <div class="bg-amber-50 p-4 rounded-lg">
              <i class="fas fa-robot text-2xl text-[var(--brand-color)]"></i>
              <p class="mt-2 font-medium">Innovation</p>
            </div>
          </div>
        </section>
      </main>

      <!-- Footer -->
      <footer class="text-center pt-24">
        <div class="icon-box mx-auto">
          <i class="fas fa-heart text-3xl text-[var(--brand-color)]"></i>
        </div>
        <p class="text-2xl font-semibold text-gray-800 mb-8">
          Merci de soutenir notre aventure entrepreneuriale !
        </p>
        <a href="{{ route('menu') }}" class="inline-flex items-center brand-bg text-white font-bold text-lg py-4 px-12 rounded-full shadow-lg hover:bg-opacity-90 transition-all transform hover:scale-105 duration-300">
          <i class="fas fa-shopping-cart mr-2"></i>
          Passer une commande
        </a>
        
        <div class="mt-12 flex justify-center space-x-6">
          <a href="#" class="text-[var(--text-color)] hover:text-[var(--brand-color)] text-2xl">
            <i class="fab fa-facebook"></i>
          </a>
          <a href="#" class="text-[var(--text-color)] hover:text-[var(--brand-color)] text-2xl">
            <i class="fab fa-instagram"></i>
          </a>
          <a href="#" class="text-[var(--text-color)] hover:text-[var(--brand-color)] text-2xl">
            <i class="fab fa-whatsapp"></i>
          </a>
          <a href="#" class="text-[var(--text-color)] hover:text-[var(--brand-color)] text-2xl">
            <i class="fab fa-tiktok"></i>
          </a>
        </div>
      </footer>

    </div>
  </div>
@endsection