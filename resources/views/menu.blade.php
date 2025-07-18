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
                           data-category="boissons" href="#">Boissons</a>
                    </li>
                    <li>
                        <a class="category-link block px-4 py-2 rounded-md font-semibold text-gray-700 hover:bg-amber-400 hover:text-white transition-colors duration-300"
                           data-category="snacks" href="#">Snacks Salés</a>
                    </li>
                    <li>
                        <a class="category-link block px-4 py-2 rounded-md font-semibold text-gray-700 hover:bg-amber-400 hover:text-white transition-colors duration-300"
                           data-category="patisseries" href="#">Pâtisseries</a>
                    </li>
                </ul>
            </div>
        </aside>
        <!-- Main Section: Produits -->
        <section class="w-full md:w-3/4" id="products-section">
            <!-- Boissons -->
            <div class="product-category" id="boissons">
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">




                    <div class="bg-white rounded-lg overflow-hidden shadow-lg transform hover:scale-105 transition-transform duration-300">
                        <img alt="Jus d'avocat" class="w-full h-48 object-cover"
                             src="https://lh3.googleusercontent.com/aida-public/AB6AXuDATYyKcPzDXF1mFScU4X642OOPuEvdiKXUdzI-1kpxiSSMgweLxvW1DJqmqhrZsvbLk56Bemd5PrwmyBP3dzzoWVXrLcd_tR6JpVhGw-_EIAqOtNj4OwK6nQRgCVP6ZKtVfaLiUn_RkTNS0cmD9nvhhTpGdodlMifYZgOlRP1EzGKwLh3fpZC7Yvv_yfPLgsv4kgHB5JKSRhrgtDIzWv5EHCF5em5aHAkdbSqr9JiF6SRlKu9tbmvd2VF5vb8ytWqwBQe5tZfwKFFT"/>
                        <div class="p-6 text-center">
                            <h3 class="text-xl font-bold text-black">Jus d'avocat</h3>
                            <p class="text-gray-700 mt-2">Onctueux et rafraîchissant, plein d'énergie.</p>
                            <p class="text-2xl font-poppins-black text-amber-500 mt-4">12 Dhs</p>
                        </div>
                    </div>





                </div>
            </div>
            <!-- Snacks Salés -->
            <div class="product-category hidden" id="snacks">
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">






                    <!-- Bocadillo -->
                    <div class="bg-white rounded-lg overflow-hidden shadow-lg transform hover:scale-105 transition-transform duration-300">
                        <img alt="Bocadillo" class="w-full h-48 object-cover"
                             src="https://lh3.googleusercontent.com/aida-public/AB6AXuAP3mhFBmWm8D4nYW9mHB6y2vR0gDwaQLpLaMUgdqM3b47AbKpByB0WdCmkxig7ZGfEDpdqP3p4xmvagYjVl7sowVxloeZhpk1UmyskaMLeNN5Ag8-3GcmcWwMpc4P6dNhzoe1zYI2tg4qhr1wxzQvxrGRUavswCMOf-tEOIeEicHEchZ8NBMXsbw_AZj1Yi6kerI9m-TGoQmb0Mq220EGRvncpT5TLlNSTUkCMwQVdul_p6FosAsWImSfRiUDK3ep_Kfgik58RIdap"/>
                        <div class="p-6 text-center">
                            <h3 class="text-xl font-bold text-black">Bocadillo</h3>
                            <p class="text-gray-700 mt-2">Sandwich garni, thon, poulet ou viande hachée.</p>
                            <p class="text-2xl font-poppins-black text-amber-500 mt-4">15 Dhs</p>
                        </div>
                    </div>
                    

                    
                </div>
            </div>
            <!-- Pâtisseries -->
            <div class="product-category hidden" id="patisseries">
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">


                    <!-- Msemen -->
                    <div class="bg-white rounded-lg overflow-hidden shadow-lg transform hover:scale-105 transition-transform duration-300">
                        <img alt="Msemen" class="w-full h-48 object-cover"
                             src="https://lh3.googleusercontent.com/aida-public/AB6AXuDyuwB115jzYetZw8vwh2Fj4abI3hexgpbHUzmVtUeWHKk3A_gNXwEdF2YBf-jxTmT8ukA--FkSfOB6L8uhMNgQQcBo25Ff1DauXUUtxbDBJe-5DJfU1rkqaPTDKg9_oZixNbaNVzlQelTNo6v1Ffg78-EhMhJsKLHHt0fh3PpL-CWwnBEDkNb70iI8u8R_IXROQgrURUI8Hh8vY27qzrpA1BbIYYt7okCSTdQ8HwTKls6XRtOUe37lk5SZ8Q2XRkPEORbKWTDzvqnl"/>
                        <div class="p-6 text-center">
                            <h3 class="text-xl font-bold text-black">Msemen</h3>
                            <p class="text-gray-700 mt-2">Feuilleté traditionnel, nature ou farci.</p>
                            <p class="text-2xl font-poppins-black text-amber-500 mt-4">5 Dhs</p>
                        </div>
                    </div>



                   
                </div>
            </div>
        </section>
    </div>
</main>

@endsection