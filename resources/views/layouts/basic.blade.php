<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="description" content="Commandez en ligne vos snacks préférés à la Buvette Attalib. Livraison rapide de msemen, harira, bocadillos et jus naturels.">
    <title>Buvette Attalib - Livraison de Snacks Marocains pour Étudiants</title>

    <!-- Preload critical resources -->
    <link rel="preload" href="https://cdn.tailwindcss.com?plugins=forms,container-queries" as="script">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- Fonts and Icons -->
    <link href="https://fonts.googleapis.com/css2?family=Kalam:wght@700&family=Poppins:wght@400;700;900&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet"/>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>



<body>
    
    <!-- Header with working mobile menu -->
        @if(session()->has('success'))
        <x-succesalert />
    @elseif(session()->has('error'))
        <x-ereuralert />
    @endif
    <x-navbar/>


    <!-- Content -->
    @yield('Home')
    @yield('MenuPage')
    @yield('AboutPage')
    @yield('Produit')
    @yield('Panier')
    <!-- Footer -->
    <x-footer/>

    <!-- Success Order Modal -->
    <div id="successModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden">
        <div class="bg-white rounded-xl p-8 max-w-md w-full mx-4 relative">
            <!-- Close Button -->
            <button onclick="closeSuccessModal()" class="absolute top-4 right-4 text-gray-500 hover:text-gray-700">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
            
            <!-- Success Icon -->
            <div class="text-center mb-6">
                <div class="mx-auto flex items-center justify-center h-16 w-16 rounded-full bg-green-100">
                    <svg class="h-10 w-10 text-green-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                </div>
            </div>
            
            <!-- Message -->
            <div class="text-center">
                <h3 class="text-2xl font-bold text-gray-900 mb-2">Commande Enregistrée !</h3>
                <p class="text-gray-600 mb-6">Notre équipe va confirmer votre commande dans les plus brefs délais. Merci pour votre confiance !</p>
                
                <!-- Action Buttons -->
                <div class="mt-6">
                    <button onclick="closeSuccessModal()" class="w-full bg-[#ee993e] hover:bg-[#d88a35] text-white font-bold py-3 px-6 rounded-full transition-colors duration-200">
                        D'accord
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Check for success parameter in URL
        document.addEventListener('DOMContentLoaded', function() {
            const urlParams = new URLSearchParams(window.location.search);
            if (urlParams.get('order_success') === '1') {
                showSuccessModal();
                // Clean up URL without reloading the page
                const newUrl = window.location.pathname;
                window.history.replaceState({}, document.title, newUrl);
            }
        });

        function showSuccessModal() {
            document.getElementById('successModal').classList.remove('hidden');
            document.body.classList.add('overflow-hidden');
        }

        function closeSuccessModal() {
            document.getElementById('successModal').classList.add('hidden');
            document.body.classList.remove('overflow-hidden');
        }
    </script>

    <!-- JavaScript -->
    <script src="{{ asset('js/script1.js') }}"></script>
    <script src="{{ asset('js/menu.js') }}"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

</body>
</html>
