@extends('layouts.basic')

@section('MenuPage')
<main class="container mx-auto px-4 py-8 md:py-16">
    <h1 class="text-4xl md:text-5xl text-center mb-12">
        <span class="font-kalam text-amber-500">Découvrez Notre</span>
        <span class="font-poppins-black text-black block -mt-2 md:-mt-3">MENU VARIÉ</span>
    </h1>
    <div class="flex flex-col md:flex-row md:space-x-8">
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

            <!-- Boissons -->
            <div class="product-category" id="boissons">
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach ($products as $product)
                        @if ($product->id_categorie == 1)
                            <a href="{{ route('product', ['id' => $product->id]) }}" class="block">
                                <div class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transform hover:scale-105 transition-transform duration-300 flex flex-col">
                                    <div class="w-full h-[400px] overflow-hidden">
                                        <img 
                                            src="{{ asset('pack_images/' . $product->image) }}" 
                                            alt="{{ $product->nom }}" 
                                            class="w-full h-full object-cover object-center transition duration-300 hover:scale-105"
                                        />
                                    </div>
                                    <div class="p-6 text-center flex-1 flex flex-col justify-between">
                                        <h3 class="text-2xl font-bold text-black mb-2">{{ $product->nom }}</h3>
                                        <p class="text-gray-700 mb-4">{{ $product->description }}</p>
                                        <p class="text-3xl font-poppins-black text-amber-500">{{ number_format($product->prix, 2) }} Dhs</p>
                                    </div>
                                </div>
                            </a>
                        @endif
                    @endforeach
                </div>
            </div>

            <!-- Snacks -->
            <div class="product-category hidden" id="snacks">
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach ($products as $product)
                        @if ($product->id_categorie == 2)
                            <a href="{{ route('product', ['id' => $product->id]) }}" class="block">
                                <div class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transform hover:scale-105 transition-transform duration-300 flex flex-col">
                                    <div class="w-full h-[400px] overflow-hidden">
                                        <img 
                                            src="{{ asset('pack_images/' . $product->image) }}" 
                                            alt="{{ $product->nom }}" 
                                            class="w-full h-full object-cover object-center transition duration-300 hover:scale-105"
                                        />
                                    </div>
                                    <div class="p-6 text-center flex-1 flex flex-col justify-between">
                                        <h3 class="text-2xl font-bold text-black mb-2">{{ $product->nom }}</h3>
                                        <p class="text-gray-700 mb-4">{{ $product->description }}</p>
                                        <p class="text-3xl font-poppins-black text-amber-500">{{ number_format($product->prix, 2) }} Dhs</p>
                                    </div>
                                </div>
                            </a>
                        @endif
                    @endforeach
                </div>
            </div>

            <!-- Jus Naturels -->
            <div class="product-category hidden" id="patisseries">
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach ($products as $product)
                        @if ($product->id_categorie == 3)
                            <a href="{{ route('product', ['id' => $product->id]) }}" class="block">
                                <div class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transform hover:scale-105 transition-transform duration-300 flex flex-col">
                                    <div class="w-full h-[400px] overflow-hidden">
                                        <img 
                                            src="{{ asset('pack_images/' . $product->image) }}" 
                                            alt="{{ $product->nom }}" 
                                            class="w-full h-full object-cover object-center transition duration-300 hover:scale-105"
                                        />
                                    </div>
                                    <div class="p-6 text-center flex-1 flex flex-col justify-between">
                                        <h3 class="text-2xl font-bold text-black mb-2">{{ $product->nom }}</h3>
                                        <p class="text-gray-700 mb-4">{{ $product->description }}</p>
                                        <p class="text-3xl font-poppins-black text-amber-500">{{ number_format($product->prix, 2) }} Dhs</p>
                                    </div>
                                </div>
                            </a>
                        @endif
                    @endforeach
                </div>
            </div>

        </section>
    </div>
</main>
@endsection
