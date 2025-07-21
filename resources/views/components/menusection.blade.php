<section class="bg-white py-16 md:py-24" id="menu">
  <div class="container mx-auto px-4">
    <h2 class="text-4xl md:text-5xl text-center mb-12">
      <span class="font-kalam text-amber-500">Nos Packs</span>
      <span class="font-poppins-black text-black block -mt-2 md:-mt-3">LES PLUS POPULAIRES</span>
    </h2>
    
    <!-- Grid responsive: 1 col (mobile), 2 cols (sm), 3 cols (lg) -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
      @foreach ($packs as $pack)
        <div class="bg-gray-100 rounded-lg overflow-hidden shadow-lg transform hover:scale-[1.02] transition-transform duration-300 group">
          <div class="aspect-[4/5] overflow-hidden">
            <img 
              alt="{{ $pack->nom }}"
              class="w-full h-full object-cover transition-transform duration-500"
              src="{{ asset('pack_images/' . $pack->image) }}"
              loading="lazy"
            />
          </div>

          <div class="p-6 text-center">
            <h3 class="text-xl font-bold text-black">{{ $pack->nom }}</h3>
            <p class="text-gray-700 mt-2">{{ $pack->description }}</p>
            <p class="text-2xl font-poppins-black text-amber-500 mt-4">{{ number_format($pack->prix, 2) }} Dhs</p>
            <button
              class="mt-4 bg-amber-400 text-black font-semibold py-2 px-6 rounded-full text-sm hover:bg-amber-500 transition add-to-cart"
              data-item="{{ $pack->nom }}"
              data-price="{{ $pack->prix }}"
            >
              Ajouter au panier
            </button>
          </div>
        </div>
      @endforeach
    </div>

    <!-- View More Button -->
    <div class="text-center mt-12">
      <button class="inline-block border-2 border-black text-black font-bold py-3 px-8 rounded-full hover:bg-black hover:text-white transition">
        Voir tout le menu
      </button>
    </div>
  </div>
</section>
