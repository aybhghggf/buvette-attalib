<header class="fixed top-0 left-0 right-0 z-50 bg-amber-400/90 backdrop-blur-sm">
    <nav class="container mx-auto px-4 py-4 flex justify-between items-center">
      <a class="font-kalam text-2xl font-bold text-black hover:text-amber-600 transition-colors" href="{{ route('index') }}" aria-label="Accueil Buvette Attalib">Buvette Attalib</a>
      
      <div class="hidden md:flex items-center space-x-8">
              <a class="text-black font-semibold hover:text-white transition duration-300" href="{{ route('index') }}">Acceuil</a>
        <a class="text-black font-semibold hover:text-white transition duration-300" href="{{ route('menu') }}">Menu</a>
        <a class="text-black font-semibold hover:text-white transition duration-300" href="{{ route('about') }}">À propos</a>
        <button class="bg-black text-white font-bold py-2 px-6 rounded-full text-sm hover:bg-gray-800 transition duration-300 order-btn">
          Commander
        </button>
      </div>
      
      <button class="md:hidden text-black mobile-menu-button" aria-label="Ouvrir le menu">
        <span class="material-symbols-outlined text-3xl">menu</span>
      </button>
    </nav>
    
    <!-- Mobile Menu -->
    <div class="mobile-menu hidden md:hidden bg-amber-400 w-full px-4 pb-4 shadow-lg">
            <a class="block py-3 text-black font-semibold border-b border-amber-500 hover:text-white transition" href="{{ route('index') }}">Acceuil</a>
      <a class="block py-3 text-black font-semibold border-b border-amber-500 hover:text-white transition" href="#menu">Menu</a>
      <a class="block py-3 text-black font-semibold border-b border-amber-500 hover:text-white transition" href="#about">À propos</a>
      <button class="w-full mt-2 bg-black text-white font-bold py-2 px-6 rounded-full text-sm hover:bg-gray-800 transition order-btn">
        Commander
      </button>
    </div>
  </header>