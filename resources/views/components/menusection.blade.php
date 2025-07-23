<section class="bg-white py-16 md:py-24" id="menu">
  <div class="container mx-auto px-4">
    <h2 class="text-4xl md:text-5xl text-center mb-12">
      <span class="font-kalam text-amber-500">Nos Packs</span>
      <span class="font-poppins-black text-black block -mt-2 md:-mt-3">LES PLUS POPULAIRES</span>
    </h2>
    
    <!-- Alerts container -->
    <div id="alerts" class="mb-6"></div>
    
    <!-- Grid responsive: 1 col (mobile), 2 cols (sm), 3 cols (lg) -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
      @forelse ($packs as $pack)
        <div class="relative group">
          <!-- Clickable card overlay -->
          <a href="{{ route('product', $pack->id) }}" 
             class="absolute inset-0 z-10 rounded-lg focus:outline-none focus:ring-2 focus:ring-amber-300"
             aria-label="Voir les détails du pack {{ $pack->nom }}">
          </a>
          
          <div class="bg-gray-100 rounded-lg overflow-hidden shadow-lg transform hover:scale-[1.02] transition-transform duration-300 cursor-pointer">
            <div class="aspect-[4/5] overflow-hidden relative">
              @if($pack->image && file_exists(public_path('pack_images/' . $pack->image)))
                <img 
                  alt="Image du pack {{ $pack->nom }}"
                  class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110"
                  src="{{ asset('pack_images/' . $pack->image) }}"
                  loading="lazy"
                  onerror="this.src='{{ asset('images/placeholder.jpg') }}'; this.onerror=null;"
                />
              @else
                <div class="w-full h-full bg-gray-300 flex items-center justify-center">
                  <span class="text-gray-500 text-lg">Image non disponible</span>
                </div>
              @endif
              
              <!-- Availability Badge -->
              <div class="absolute top-3 right-3 z-30">
                @if($pack->disponible)
                  <span class="bg-green-500 text-white text-xs font-bold px-3 py-1 rounded-full shadow-lg">
                    Disponible
                  </span>
                @else
                  <span class="bg-red-500 text-white text-xs font-bold px-3 py-1 rounded-full shadow-lg">
                    Épuisé
                  </span>
                @endif
              </div>
            </div>

            <div class="p-6 text-center">
              <h3 class="text-xl font-bold text-black mb-2">{{ $pack->nom }}</h3>
              <p class="text-gray-700 mt-2 text-sm leading-relaxed">{{ Str::limit($pack->description, 100) }}</p>
              <p class="text-2xl font-poppins-black text-amber-500 mt-4 mb-4">{{ number_format($pack->prix, 2) }} Dhs</p>
              
              <form action="{{ route('ajouterPanier', $pack->id) }}" method="POST" class="add-to-cart-form relative z-20">
                  @csrf
                  <button
                      type="submit"
                      class="w-full bg-amber-400 text-black font-semibold py-3 px-6 rounded-full text-sm hover:bg-amber-500 transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-amber-300 disabled:opacity-50 disabled:cursor-not-allowed"
                      data-item="{{ $pack->nom }}"
                      data-price="{{ $pack->prix }}"
                      aria-label="Ajouter {{ $pack->nom }} au panier"
                      onclick="event.stopPropagation();"
                  >
                      <span class="button-text">Ajouter au panier</span>
                      <span class="loading-text hidden">Ajout en cours...</span>
                  </button>
              </form>
            </div>
          </div>
        </div>
      @empty
        <div class="col-span-full text-center py-12">
          <p class="text-gray-500 text-lg">Aucun pack disponible pour le moment.</p>
        </div>
      @endforelse
    </div>

    <!-- View More Button -->
    <div class="text-center mt-12">
      <a href="{{ route('menu') }}" 
         class="inline-block border-2 border-black text-black font-bold py-3 px-8 rounded-full hover:bg-black hover:text-white transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-gray-300"
         aria-label="Voir tout le menu complet">
        Voir tout le menu
      </a>
    </div>
  </div>
</section>









@push('scripts')
<script>
$(document).ready(function() {
    $('.add-to-cart-form').on('submit', function(e) {
        e.preventDefault();

        let form = $(this);
        let button = form.find('button[type="submit"]');
        let buttonText = button.find('.button-text');
        let loadingText = button.find('.loading-text');
        let actionUrl = form.attr('action');
        let token = form.find('input[name="_token"]').val();

        // Disable button and show loading state
        button.prop('disabled', true);
        buttonText.addClass('hidden');
        loadingText.removeClass('hidden');

        $.ajax({
            url: actionUrl,
            method: "POST",
            data: { _token: token },
            success: function(response) {
                // Show success message
                let divAlert = $('<div class="alert alert-success bg-green-500 text-white p-4 mb-4 rounded-lg shadow-md border-l-4 border-green-700 flex items-center" role="alert">' +
                    '<svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">' +
                    '<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>' +
                    '</svg>' +
                    '<span>' + (response.message || 'Produit ajouté au panier avec succès!') + '</span>' +
                    '</div>');
                
                $('#alerts').prepend(divAlert);
                
                // Update cart count if element exists
                if ($('#cart-count').length) {
                    $('#cart-count').text(response.totalItems || 0);
                }

                // Auto dismiss alert
                setTimeout(function() {
                    divAlert.fadeOut(500, function() {
                        $(this).remove();
                    });
                }, 4000);
            },
            error: function(xhr) {
                let errorMessage = 'Erreur lors de l\'ajout au panier.';
                
                if (xhr.responseJSON && xhr.responseJSON.message) {
                    errorMessage = xhr.responseJSON.message;
                }
                
                let divAlert = $('<div class="alert alert-error bg-red-500 text-white p-4 mb-4 rounded-lg shadow-md border-l-4 border-red-700 flex items-center" role="alert">' +
                    '<svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">' +
                    '<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"></path>' +
                    '</svg>' +
                    '<span>' + errorMessage + '</span>' +
                    '</div>');
                
                $('#alerts').prepend(divAlert);
                
                // Auto dismiss error alert
                setTimeout(function() {
                    divAlert.fadeOut(500, function() {
                        $(this).remove();
                    });
                }, 5000);
            },
            complete: function() {
                // Re-enable button and restore original state
                button.prop('disabled', false);
                buttonText.removeClass('hidden');
                loadingText.addClass('hidden');
            }
        });
    });
});
</script>
@endpush