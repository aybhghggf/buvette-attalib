@extends( 'layouts.basic' )
@section('titre')
Details du Pack
@endsection
@section('Produit')

<!-- Alerts container -->
<div id="alerts" class="fixed top-4 right-4 z-50 max-w-md"></div>

<div class="px-40 flex flex-1 justify-center py-14">
          <div class="layout-content-container flex flex-col max-w-[960px] flex-1">
            <div class="@container">
              <div class="flex flex-col gap-6 px-4 py-10 @[480px]:gap-8 @[864px]:flex-row">
<div class="w-full max-w-3xl mx-auto relative">
  <img
    src="{{ asset('pack_images/' . $produit->image) }}"
    alt="Image du pack"
    class="w-full h-auto object-cover rounded-lg shadow-lg"
  />
  <!-- Availability Badge -->
  <div class="absolute top-4 right-4">
    @if($produit->disponible)
      <span class="bg-green-500 text-white text-sm font-bold px-4 py-2 rounded-full shadow-lg">
        Disponible
      </span>
    @else
      <span class="bg-red-500 text-white text-sm font-bold px-4 py-2 rounded-full shadow-lg">
        Épuisé
      </span>
    @endif
  </div>
</div>

                <div class="flex flex-col gap-6 @[480px]:min-w-[400px] @[480px]:gap-8 @[864px]:justify-center">
                  <div class="flex flex-col gap-2 text-left">
                    <h1
                      class="text-[#191510] text-4xl font-black leading-tight tracking-[-0.033em] @[480px]:text-5xl @[480px]:font-black @[480px]:leading-tight @[480px]:tracking-[-0.033em]"
                    >
                        {{ $produit->nom }}
                </h1>
                    <h2 class="text-[#191510] text-sm font-normal leading-normal @[480px]:text-base @[480px]:font-normal @[480px]:leading-normal">
                            {{ $produit->description }}
                    </h2>
                  </div>
                  <form action="{{ route('ajouterPanier', $produit->id) }}" method="POST" class="add-to-cart-form">
                      @csrf
                      <button
                          type="submit"
                          class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-full h-10 px-4 @[480px]:h-12 @[480px]:px-5 bg-[#eed7be] text-[#191510] text-sm font-bold leading-normal tracking-[0.015em] @[480px]:text-base @[480px]:font-bold @[480px]:leading-normal @[480px]:tracking-[0.015em] transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-amber-300 disabled:opacity-50 disabled:cursor-not-allowed"
                          data-item="{{ $produit->nom }}"
                          data-price="{{ $produit->prix }}"
                          aria-label="Ajouter {{ $produit->nom }} au panier"
                      >
                          <span class="button-text truncate">Ajouter au panier</span>
                          <span class="loading-text hidden truncate">Ajout en cours...</span>
                      </button>
                  </form>
                </div>
              </div>
            </div>
            <h3 class="text-[#191510] text-lg font-bold leading-tight tracking-[-0.015em] px-4 pb-2 pt-4">What's Inside</h3>
            <p class="text-[#191510] text-base font-normal leading-normal pb-3 pt-1 px-4">
              {{ $produit->descriptionSecondaire }}
            </p>
          </div>
        </div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
// Ensure jQuery is loaded
if (typeof jQuery === 'undefined') {
    console.error('jQuery is not loaded!');
}

$(document).ready(function() {
    console.log('AJAX script loaded'); // Debug log
    
    $('.add-to-cart-form').on('submit', function(e) {
        console.log('Form submitted, preventing default'); // Debug log
        e.preventDefault();
        e.stopPropagation();

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
@endsection