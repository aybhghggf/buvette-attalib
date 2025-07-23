@extends('layouts.basic')

@section('titre')
Votre Panier
@endsection

@section('Panier')

@if($items->count() > 0)

<div id="alerts" class="fixed top-4 right-4 z-50"></div>

<div class="px-40 flex flex-1 justify-center py-14 mt-8 md:mt-12">
  <div class="layout-content-container flex flex-col max-w-[960px] flex-1">
    <div class="flex flex-wrap justify-between gap-3 p-4">
      <p class="text-[#1b150d] tracking-light text-[32px] font-bold leading-tight min-w-72">Votre Panier</p>
    </div>

    @foreach ($items as $item) 
    <div class="cart-item flex items-center gap-4 bg-[#fcfaf8] px-4 min-h-[72px] py-2 justify-between">
      <div class="flex items-center gap-4">
        <div
          class="bg-center bg-no-repeat aspect-square bg-cover rounded-lg size-14"
          style="background-image: url('{{ asset('pack_images/' . $item->image) }}')">
        </div>
        <div class="flex flex-col justify-center">
          <p class="text-[#1b150d] text-base font-medium leading-normal line-clamp-1">{{ $item->nom }}</p>
          <p class="text-[#9a744c] text-sm font-normal leading-normal line-clamp-2">Quantité : {{ $item->quantite }}</p>
          <p class="text-[#9a744c] text-sm font-normal leading-normal line-clamp-2">Prix unitaire : {{ number_format($item->prix_panier, 2) }} MAD</p>
          <p class="text-[#1b150d] text-sm font-semibold mt-1">Total : {{ number_format($item->prix_panier * $item->quantite, 2) }} MAD</p>
        </div>
      </div>

      <div class="shrink-0">
        <form action="{{ route('supprimerPanier', $item->id) }}" method="post" class="delete-from-cart-form" data-id="{{ $item->id }}">
          @csrf
          @method('DELETE')
          <button
            type="submit"
            class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-full h-8 px-4 bg-[#f3ede7] text-[#1b150d] text-sm font-medium leading-normal w-fit"
          >
            <span class="truncate">Retirer</span>
          </button>
        </form>
      </div>
    </div>
    @endforeach

    <h2 class="text-[#1b150d] text-[22px] font-bold leading-tight tracking-[-0.015em] px-4 pb-3 pt-5">Résumé</h2>

    <div class="p-4">
      <div class="flex justify-between gap-x-6 py-2">
        <p class="text-[#9a744c] text-sm font-normal leading-normal">Sous-total</p>
        <p class="text-[#1b150d] text-sm font-normal leading-normal text-right">{{ number_format($totaleDuPanier, 2) }} MAD</p>
      </div>
      <div class="flex justify-between gap-x-6 py-2">
        <p class="text-[#9a744c] text-sm font-normal leading-normal">Livraison</p>
        <p class="text-[#1b150d] text-sm font-normal leading-normal text-right">Gratuite</p>
      </div>
      <div class="flex justify-between gap-x-6 py-2">
        <p class="text-[#9a744c] text-sm font-normal leading-normal">Total</p>
        <p class="text-[#1b150d] text-sm font-normal leading-normal text-right">{{ number_format($totaleDuPanier, 2) }} MAD</p>
      </div>
    </div>

    <div class="flex px-4 py-3 justify-end">
      <button
        type="button"
        id="checkout-button"
        class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-full h-12 px-5 bg-[#ee993e] text-[#1b150d] text-base font-bold leading-normal tracking-[0.015em]"
      >
        <span class="truncate">Passer à la commande</span>
      </button>
    </div>
  </div>
</div>

@else
<div class="px-40 flex flex-1 justify-center py-14 mb-14">
  <div class="layout-content-container flex flex-col max-w-[960px] flex-1">
    <div class="flex flex-wrap justify-between gap-3 p-4">
      <p class="text-[#191510] tracking-light text-[32px] font-bold leading-tight min-w-72">Votre Panier</p>
    </div>
    <div class="flex flex-col px-4 py-6">
      <div class="flex flex-col items-center gap-6">
        <!-- Icon instead of image -->
        <div class="rounded-xl w-24 h-24 flex items-center justify-center bg-[#f1ede9]">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-[#191510]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13l-1.5 6h13a1 1 0 001-1V7H6.4M7 13L5.4 7H19M16 21a2 2 0 11-4 0 2 2 0 014 0zm-6 0a2 2 0 11-4 0 2 2 0 014 0z" />
          </svg>
        </div>

        <!-- Text -->
        <div class="flex max-w-[480px] flex-col items-center gap-2">
          <p class="text-[#191510] text-lg font-bold leading-tight tracking-[-0.015em] max-w-[480px] text-center">Votre panier est vide</p>
          <p class="text-[#191510] text-sm font-normal leading-normal max-w-[480px] text-center">Parcourez notre menu pour découvrir de délicieuses boissons et snacks marocains.</p>
        </div>

        <!-- Button -->
        <a href="{{ route('menu') }}"
          class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-full h-10 px-4 bg-[#f1ede9] text-[#191510] text-sm font-bold leading-normal tracking-[0.015em]">
          <span class="truncate">Continuer vos achats</span>
        </a>
      </div>
    </div>
  </div>
</div>

@endif

<!--Modal for order confirmation-->
<!-- Responsive Modal Overlay -->
<div id="modal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden p-4">
  <form action="{{ route('passer-commande') }}" method="POST" class="w-full max-w-lg" id="checkout-form">
    @csrf
  <!-- Responsive Modal Content -->
  <div class="bg-white rounded-xl relative w-full max-w-lg mx-auto max-h-[90vh] overflow-y-auto">
    <!-- Close Button -->
    <button type="button" class="close-modal absolute top-4 right-4 z-10 w-8 h-8 flex items-center justify-center text-xl font-bold text-gray-600 hover:text-black hover:bg-gray-100 rounded-full transition-colors">&times;</button>

    <!-- Modal Content -->
    <div class="p-6 pt-12">
      <!-- Header -->
      <div class="mb-6">
        <h2 class="text-2xl md:text-3xl font-bold text-[#1b150d] text-center">Passer Commande</h2>
      </div>
      
      <!-- Form Fields -->
      <div class="space-y-4">
        <!-- Full Name Field -->
        <div>
          <label class="block text-[#1b150d] text-sm font-medium mb-2">Nom Complet</label>
          <input 
            type="text" 
            name="nom_complet"
            required
            placeholder="Entrez votre nom complet" 
            class="w-full px-4 py-3 rounded-xl border border-[#e7dccf] bg-[#fcfaf8] focus:border-[#ee993e] focus:outline-none text-[#1b150d] placeholder:text-[#9a744c] transition-colors" 
          />
        </div>

        <!-- Phone Number Field -->
        <div>
          <label class="block text-[#1b150d] text-sm font-medium mb-2">Numéro de Téléphone</label>
          <input 
            type="tel" 
            name="telephone"
            required
            placeholder="Entrez votre numéro de téléphone" 
            class="w-full px-4 py-3 rounded-xl border border-[#e7dccf] bg-[#fcfaf8] focus:border-[#ee993e] focus:outline-none text-[#1b150d] placeholder:text-[#9a744c] transition-colors" 
          />
        </div>

        <!-- Location Field -->
        <div>
          <label class="block text-[#1b150d] text-sm font-medium mb-2">Localisation</label>
          <select name="localisation" required class="w-full px-4 py-3 rounded-xl border border-[#e7dccf] bg-[#fcfaf8] focus:border-[#ee993e] focus:outline-none text-[#1b150d] transition-colors appearance-none cursor-pointer">
            <option value="">Sélectionnez votre localisation</option>
              <option value="ISTAG Yaakoub el mansour">ISTAG Yaakoub el mansour</option>
              <option value="Centre Formation Almajd">Centre Formation Almajd</option>
              <option value="NTIC Rabat">NTIC Rabat</option>
              <option value="ISTA Hay arriyad">ISTA Hay arriyad</option>
          </select>
        </div>

        <!-- Additional Information Field -->
        <div>
          <label class="block text-[#1b150d] text-sm font-medium mb-2">Informations Supplémentaires</label>
          <textarea 
            name="informations_supplementaires"
            placeholder="Avez-vous des demandes spéciales ou des instructions de livraison ?" 
            rows="4"
            class="w-full px-4 py-3 rounded-xl border border-[#e7dccf] bg-[#fcfaf8] focus:border-[#ee993e] focus:outline-none text-[#1b150d] placeholder:text-[#9a744c] transition-colors resize-none"
          ></textarea>
        </div>

        <!-- Place Order Button -->
        <div class="pt-4">
          <button type="submit" class="w-full bg-[#ee993e] hover:bg-[#d88a35] text-[#1b150d] font-bold py-3 px-6 rounded-full transition-colors duration-200">
            <span class="submit-text">Passer Commande</span>
            <span class="loading hidden">Traitement en cours...</span>
          </button>
        </div>
        <div id="form-message" class="mt-4 text-center hidden"></div>
      </div>
    </div>
    </div>
  </form>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
$(document).ready(function() {
    // Handle delete from cart
    $('.delete-from-cart-form').on('submit', function(e) {
        e.preventDefault();

        let form = $(this);
        let actionUrl = form.attr('action');
        let token = form.find('input[name="_token"]').val();

        $.ajax({
            url: actionUrl,
            method: "POST",
            data: {
                _token: token,
                _method: "DELETE"
            },
            success: function(response) {
                form.closest('.cart-item').remove();
                $('#cart-count').text(response.totalItems);
                let divAlert = $('<div class="alert alert-success bg-green-500 text-white p-4 mb-4 rounded" role="alert">' + response.message + '</div>');
                $('#alerts').append(divAlert);

                setTimeout(function() {
                    divAlert.fadeOut(500, function() {
                        $(this).remove();
                    });
                }, 3000);

                if($('.cart-item').length === 0) {
                    location.reload();
                }
            },
            error: function() {
                alert("Erreur lors de la suppression.");
            }
        });
    });

    // Show modal when checkout button is clicked
    $('#checkout-button').on('click', function(e) {
        e.preventDefault();
        console.log('Checkout button clicked');
        $('#modal').removeClass('hidden');
        $('body').addClass('overflow-hidden');
    });
    
    // Close modal when clicking outside content
    $('#modal').on('click', function(e) {
        if (e.target === this) {
            $(this).addClass('hidden');
            $('body').removeClass('overflow-hidden');
        }
    });
    
    // Close modal with close button
    $('.close-modal').on('click', function() {
        $('#modal').addClass('hidden');
        $('body').removeClass('overflow-hidden');
    });
    
    // Handle checkout form submission
    $('#checkout-form').on('submit', function(e) {
        e.preventDefault();
        
        const form = $(this);
        const submitBtn = form.find('button[type="submit"]');
        const submitText = submitBtn.find('.submit-text');
        const loading = submitBtn.find('.loading');
        const messageDiv = $('#form-message');
        
        // Show loading state
        submitBtn.prop('disabled', true);
        submitText.addClass('hidden');
        loading.removeClass('hidden');
        messageDiv.addClass('hidden').removeClass('text-green-600 text-red-600');
        
        // Submit form via AJAX
        $.ajax({
            url: form.attr('action'),
            method: 'POST',
            data: form.serialize(),
            success: function(response) {
                // Show success message
                messageDiv.removeClass('hidden').addClass('text-green-600').text('Commande passée avec succès !');
                
                // Clear form and close modal after delay
                form.trigger('reset');
                setTimeout(function() {
                    $('#modal').addClass('hidden');
                    $('body').removeClass('overflow-hidden');
                    // Redirect to home page with success parameter
                    if (response.redirect) {
                        window.location.href = response.redirect;
                    } else {
                        // Fallback in case redirect URL is not provided
                        window.location.href = '{{ route("index") }}?order_success=1';
                    }
                }, 1500);
            },
            error: function(xhr) {
                let errorMessage = 'Une erreur est survenue. Veuillez réessayer.';
                
                if (xhr.responseJSON && xhr.responseJSON.errors) {
                    // Handle validation errors
                    const errors = xhr.responseJSON.errors;
                    errorMessage = Object.values(errors)[0][0]; // Show first error
                } else if (xhr.responseJSON && xhr.responseJSON.message) {
                    errorMessage = xhr.responseJSON.message;
                }
                
                // Show error message
                messageDiv.removeClass('hidden').addClass('text-red-600').text(errorMessage);
                
                // Re-enable form
                submitBtn.prop('disabled', false);
                submitText.removeClass('hidden');
                loading.addClass('hidden');
            }
        });
    });
});
</script>

@endsection
