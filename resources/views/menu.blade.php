@extends('layouts.basic')

@section('MenuPage')
<div id="alerts" class="fixed top-5 right-5 z-50"></div>

<main class="container mx-auto px-4 py-8 md:py-16 mt-16 md:mt-24">
    <h1 class="text-4xl md:text-5xl text-center mb-12">
        <span class="font-kalam text-amber-500">Découvrez Notre</span>
        <span class="font-poppins-black text-black block -mt-2 md:-mt-3">MENU VARIÉ</span>
    </h1>
    <div class="flex flex-col md:flex-row md:space-x-8 mb-10">
        <!-- Sidebar: Catégories -->
        <aside class="w-full md:w-1/4 mb-8 md:mb-0">
            <div class="bg-white p-4 rounded-lg shadow-lg">
                <h2 class="text-2xl font-bold mb-4 font-kalam text-black">Catégories</h2>
                <ul class="space-y-2" id="category-list">
                    <li>
                        <a class="category-link block px-4 py-2 rounded-md font-semibold text-gray-700 hover:bg-amber-400 hover:text-white transition-colors duration-300"
                           data-category="boissons" href="#">Café et Boissons</a>
                    </li>
                    <li>
                        <a class="category-link block px-4 py-2 rounded-md font-semibold text-gray-700 hover:bg-amber-400 hover:text-white transition-colors duration-300"
                           data-category="snacks" href="#">Snacks Marocains</a>
                    </li>
                    <li>
                        <a class="category-link block px-4 py-2 rounded-md font-semibold text-gray-700 hover:bg-amber-400 hover:text-white transition-colors duration-300"
                           data-category="patisseries" href="#">Jus Naturels</a>
                    </li>
                </ul>
            </div>
        </aside>

        <!-- Main Section: Produits -->
        <section class="w-full md:w-3/4" id="products-section">
            @foreach (['boissons' => 1, 'snacks' => 2, 'patisseries' => 3] as $category => $catId)
                <div class="product-category {{ $category !== 'boissons' ? 'hidden' : '' }}" id="{{ $category }}">
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                        @foreach ($products as $product)
                            @if ($product->id_categorie == $catId)
                                <div class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transform hover:scale-105 transition-transform duration-300 flex flex-col">
                                    <a href="{{ route('product', ['id' => $product->id]) }}" class="block">
                                        <div class="w-full h-[400px] overflow-hidden relative">
                                            <img 
                                                src="{{ asset('pack_images/' . $product->image) }}" 
                                                alt="{{ $product->nom }}" 
                                                class="w-full h-full object-cover object-center transition duration-300 hover:scale-105"
                                            />
                                            <!-- Availability Badge -->
                                            <div class="absolute top-3 right-3">
                                                @if($product->disponible)
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
                                            <h3 class="text-2xl font-bold text-black mb-2">{{ $product->nom }}</h3>
                                            <p class="text-gray-700 mb-4">{{ $product->description }}</p>
                                            <p class="text-3xl font-poppins-black text-amber-500">{{ number_format($product->prix, 2) }} Dhs</p>
                                        </div>
                                    </a>
<form action="{{ route('ajouterPanier', $product->id) }}" method="POST" class="px-6 pb-6 add-to-cart-form">
    @csrf
    <button
        type="submit"
        class="w-full bg-amber-400 text-black font-semibold py-2 px-6 rounded-full text-sm hover:bg-amber-500 transition"
        data-item="{{ $product->nom }}"
        data-price="{{ $product->prix }}"
    >
        Ajouter au panier
    </button>
</form>


                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            @endforeach
        </section>
    </div>
</main>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    $('.add-to-cart-form').on('submit', function(e) {
        e.preventDefault();

        let form = $(this);
        let actionUrl = form.attr('action');
        let token = form.find('input[name="_token"]').val();

        $.ajax({
            url: actionUrl,
            method: "POST",
            data: { _token: token },
            success: function(response) {
                let divAlert = $('<div class="alert alert-success bg-green-500 text-white p-4 mb-4 rounded" role="alert">' + response.message + '</div>');
                $('#alerts').append(divAlert);
                $('#cart-count').text(response.totalItems);

                // Auto dismiss alert
                setTimeout(function() {
                    divAlert.fadeOut(500, function() {
                        $(this).remove();
                    });
                }, 3000);
            },
            error: function() {
                alert("Erreur lors de l'ajout au panier.");
            }
        });
    });
});
</script>

@endsection
