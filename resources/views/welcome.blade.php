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
  
  <!-- CSS -->
  <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
  <link href="https://fonts.googleapis.com/css2?family=Kalam:wght@700&family=Poppins:wght@400;700;900&display=swap" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet"/>
  
  <style type="text/tailwindcss">
    @layer utilities {
      body {
        font-family: 'Poppins', sans-serif;
        scroll-behavior: smooth;
      }
      .font-kalam {
        font-family: 'Kalam', cursive;
      }
      .font-poppins-black {
        font-family: 'Poppins', sans-serif;
        font-weight: 900;
      }
      .hero-bg {
        background-image: linear-gradient(rgba(251, 191, 36, 0.8), rgba(251, 191, 36, 0.8)), url('https://images.unsplash.com/photo-1605203352227-34c9b33a7589?q=80&w=2940&auto=format&fit=crop');
        background-size: cover;
        background-position: center;
      }
      .menu-item:hover .menu-item-img {
        transform: scale(1.05);
      }
      .fade-in {
        animation: fadeIn 0.5s ease-in;
      }
      @keyframes fadeIn {
        from { opacity: 0; }
        to { opacity: 1; }
      }
    }
  </style>
</head>

<body class="bg-amber-400">
  <!-- Header with working mobile menu -->
  
    <x-navbar/>






  <main class="min-h-screen pt-16">
    <!-- Hero Section -->
    <x-herosection/>

    <!-- Menu Section -->
    <section class="bg-white py-16 md:py-24" id="menu">
      <div class="container mx-auto px-4">
        <h2 class="text-4xl md:text-5xl text-center mb-12">
          <span class="font-kalam text-amber-500">Nos Snacks</span>
          <span class="font-poppins-black text-black block -mt-2 md:-mt-3">LES PLUS POPULAIRES</span>
        </h2>
        
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
          <!-- Menu Item 1 -->
          <div class="bg-gray-100 rounded-lg overflow-hidden shadow-lg transform hover:scale-[1.02] transition-transform duration-300 group">
            <div class="overflow-hidden h-48">
              <img 
                alt="Msemen traditionnel marocain"
                class="w-full h-full object-cover menu-item-img transition-transform duration-500"
                src="https://lh3.googleusercontent.com/aida-public/AB6AXuDkWXzkWjq9Bjn2spfUhcsZH0iej4e1EHogfXEuVsQNofZLD4TF8eAl2cD7GZT990Uchz907RhywebQ27mZnWhPnnhYA03hpF4NnLoaD97Y2nCPQVGvNuVWuOQY7iKSuJhp79NHrdoUvGpW8ngPXdKGRWakS_4y_T0hAQwPg5-8CryxdGaMTK87pL3ecW93MpwEEZglPKMdGUo4n0pMCCFjlae00P1plW27dpw43s39EWvTTySJ923VA8H0O5thDBnJ_mKczcHPQnVI"
                loading="lazy"
              />
            </div>
            <div class="p-6 text-center">
              <h3 class="text-xl font-bold text-black">Msemen</h3>
              <p class="text-gray-700 mt-2">Feuilleté traditionnel, nature ou farci.</p>
              <p class="text-2xl font-poppins-black text-amber-500 mt-4">5 Dhs</p>
              <button class="mt-4 bg-amber-400 text-black font-semibold py-2 px-6 rounded-full text-sm hover:bg-amber-500 transition add-to-cart" data-item="Msemen" data-price="5">
                Ajouter au panier
              </button>
            </div>
          </div>
          
          <!-- Menu Item 2 -->
          <div class="bg-gray-100 rounded-lg overflow-hidden shadow-lg transform hover:scale-[1.02] transition-transform duration-300 group">
            <div class="overflow-hidden h-48">
              <img 
                alt="Harira marocaine traditionnelle"
                class="w-full h-full object-cover menu-item-img transition-transform duration-500"
                src="https://lh3.googleusercontent.com/aida-public/AB6AXuC0ikcINvzsaW42a7eYEgmYRRzEQUBQVVsgP49G5SCqNLjcont4BJu0b7YK0ausB5Al4HHqv1EdUPOBLvX_fX2Elvba3iiIAiZUJGXfiCQ0nJYWVwWtvcOb4Ld6X-ce52tO02_If0NtAd5vEVxIbXEoeVnXCtqheZRnclSVCZZmVU3I6UHcqqmNEki_Q04cnF3B_S_8GwWeBLRhE0L1GNUGENTgostVx-8T6XFnL8x3gL0Ki1RLUsJUYrwcsNB-wMUXJxhC0o_O6yzs"
                loading="lazy"
              />
            </div>
            <div class="p-6 text-center">
              <h3 class="text-xl font-bold text-black">Harira</h3>
              <p class="text-gray-700 mt-2">Soupe réconfortante aux lentilles et tomates.</p>
              <p class="text-2xl font-poppins-black text-amber-500 mt-4">10 Dhs</p>
              <button class="mt-4 bg-amber-400 text-black font-semibold py-2 px-6 rounded-full text-sm hover:bg-amber-500 transition add-to-cart" data-item="Harira" data-price="10">
                Ajouter au panier
              </button>
            </div>
          </div>
          
          <!-- Menu Item 3 -->
          <div class="bg-gray-100 rounded-lg overflow-hidden shadow-lg transform hover:scale-[1.02] transition-transform duration-300 group">
            <div class="overflow-hidden h-48">
              <img 
                alt="Bocadillo garni"
                class="w-full h-full object-cover menu-item-img transition-transform duration-500"
                src="https://lh3.googleusercontent.com/aida-public/AB6AXuBIxV3UaA1Yj1o6mLgfJQP849n1SYlV1ogG91rH0-8Ii0WobfhdqlI0aFKHXLqHU53tlkFwtsfxfs0A9DN7kAWt0V0Cg3zm1lkvQd4qqi1N9JABoDtRihBoQDssoKJo-qh3lvt2XcbfCTeF-bXKm_Qoq2leSznWLvRgOKXSPtBmokFi9iaUjYhpDXqYYORdkJQiW34ltqIICwRIgubkCMsiQXggpQeGMzsXjNy2kbOKlZ_ASviZf4HjKRqhSE6TlWVt6ED7V_qOIvrv"
                loading="lazy"
              />
            </div>
            <div class="p-6 text-center">
              <h3 class="text-xl font-bold text-black">Bocadillo</h3>
              <p class="text-gray-700 mt-2">Sandwich garni, thon, poulet ou viande hachée.</p>
              <p class="text-2xl font-poppins-black text-amber-500 mt-4">15 Dhs</p>
              <button class="mt-4 bg-amber-400 text-black font-semibold py-2 px-6 rounded-full text-sm hover:bg-amber-500 transition add-to-cart" data-item="Bocadillo" data-price="15">
                Ajouter au panier
              </button>
            </div>
          </div>
          
          <!-- Menu Item 4 -->
          <div class="bg-gray-100 rounded-lg overflow-hidden shadow-lg transform hover:scale-[1.02] transition-transform duration-300 group">
            <div class="overflow-hidden h-48">
              <img 
                alt="Jus d'avocat naturel"
                class="w-full h-full object-cover menu-item-img transition-transform duration-500"
                src="https://lh3.googleusercontent.com/aida-public/AB6AXuC6EXbiY0fGUTnNr0FET5waBh7avfWZMrOtrLB94mNtNJTfnYmK-Cb00VJkLadpHXisdUulzWSBX5DsCUe_xHeo6NWtJ3jMWLYjPSyjJkT8YfKAo-KnRCh51z5xyE7KMkrzZzJEMLYOpKbObrl0e4pWql7CDi9-SuZ_jYWbajakbq5bHhnJD1mx4pP7CLDuFohgY8HE5oIPuWrC9jBOY58Bjg9bAQpYAaVjW-BnTtEDl-QGrDXQX-mhwtw7dGLyGNCEtvruyCh_AQKi"
                loading="lazy"
              />
            </div>
            <div class="p-6 text-center">
              <h3 class="text-xl font-bold text-black">Jus d'avocat</h3>
              <p class="text-gray-700 mt-2">Onctueux et rafraîchissant, plein d'énergie.</p>
              <p class="text-2xl font-poppins-black text-amber-500 mt-4">12 Dhs</p>
              <button class="mt-4 bg-amber-400 text-black font-semibold py-2 px-6 rounded-full text-sm hover:bg-amber-500 transition add-to-cart" data-item="Jus d'avocat" data-price="12">
                Ajouter au panier
              </button>
            </div>
          </div>
        </div>
        
        <!-- View More Button -->
        <div class="text-center mt-12">
          <button class="inline-block border-2 border-black text-black font-bold py-3 px-8 rounded-full hover:bg-black hover:text-white transition">
            Voir tout le menu
          </button>
        </div>
      </div>
    </section>

    <!-- About Section -->
    <section class="bg-amber-100 py-16 md:py-24" id="about">
      <div class="container mx-auto px-4 text-center">
        <h2 class="text-4xl md:text-5xl mb-4">
          <span class="font-kalam text-amber-500">Qui Sommes-Nous ?</span>
        </h2>
        <p class="text-lg md:text-xl text-black max-w-2xl mx-auto mb-8">
          Buvette Attalib est née de l'envie de proposer aux étudiants des snacks marocains authentiques, rapides et abordables. Nous savons que la vie étudiante est trépidante, c'est pourquoi nous livrons vos en-cas préférés directement à vous, pour que vous puissiez vous concentrer sur ce qui compte le plus.
        </p>
        
        <div class="grid md:grid-cols-3 gap-8 mt-12 max-w-5xl mx-auto">
          <div class="bg-white p-6 rounded-lg shadow-md">
            <span class="material-symbols-outlined text-4xl text-amber-500 mb-4">local_shipping</span>
            <h3 class="text-xl font-bold mb-2">Livraison Rapide</h3>
            <p class="text-gray-700">Commandez avant 11h, reçu avant la pause déjeuner !</p>
          </div>
          
          <div class="bg-white p-6 rounded-lg shadow-md">
            <span class="material-symbols-outlined text-4xl text-amber-500 mb-4">payments</span>
            <h3 class="text-xl font-bold mb-2">Paiement Sécurisé</h3>
            <p class="text-gray-700">Paiement en ligne ou à la livraison.</p>
          </div>
          
          <div class="bg-white p-6 rounded-lg shadow-md">
            <span class="material-symbols-outlined text-4xl text-amber-500 mb-4">star</span>
            <h3 class="text-xl font-bold mb-2">Qualité Garantie</h3>
            <p class="text-gray-700">Produits frais préparés quotidiennement.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Order Modal (hidden by default) -->
    <div id="order-modal" class="fixed inset-0 bg-black bg-opacity-50 z-50 hidden flex items-center justify-center p-4">
      <div class="bg-white rounded-lg max-w-md w-full max-h-[90vh] overflow-y-auto">
        <div class="p-6">
          <div class="flex justify-between items-center mb-4">
            <h3 class="text-2xl font-bold">Votre Commande</h3>
            <button class="close-modal text-gray-500 hover:text-black">
              <span class="material-symbols-outlined">close</span>
            </button>
          </div>
          
          <div id="cart-items" class="mb-4">
            <!-- Cart items will be added here dynamically -->
            <p class="text-gray-500 py-8 text-center">Votre panier est vide</p>
          </div>
          
          <div class="border-t border-gray-200 pt-4">
            <div class="flex justify-between font-bold text-lg mb-6">
              <span>Total:</span>
              <span id="cart-total">0 Dhs</span>
            </div>
            
            <form id="order-form" class="space-y-4">
              <div>
                <label for="name" class="block mb-1">Nom complet</label>
                <input type="text" id="name" required class="w-full px-4 py-2 border rounded-lg">
              </div>
              
              <div>
                <label for="phone" class="block mb-1">Téléphone</label>
                <input type="tel" id="phone" required class="w-full px-4 py-2 border rounded-lg">
              </div>
              
              <div>
                <label for="location" class="block mb-1">Lieu de livraison</label>
                <input type="text" id="location" required class="w-full px-4 py-2 border rounded-lg">
              </div>
              
              <button type="submit" class="w-full bg-amber-400 text-black font-bold py-3 px-4 rounded-lg hover:bg-amber-500 transition">
                Valider la commande
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <!-- Order Confirmation Toast (hidden by default) -->
    <div id="order-toast" class="fixed bottom-4 left-1/2 transform -translate-x-1/2 bg-green-500 text-white px-6 py-3 rounded-lg shadow-lg hidden z-50">
      <div class="flex items-center">
        <span class="material-symbols-outlined mr-2">check_circle</span>
        <span>Article ajouté au panier !</span>
      </div>
    </div>
  </main>

  <!-- Footer -->
  <footer class="w-full pt-12 pb-8 bg-black text-white" id="contact">
    <div class="container mx-auto px-4">
      <div class="grid md:grid-cols-3 gap-8">
        <div class="text-center md:text-left">
          <h3 class="font-kalam text-2xl text-amber-400 mb-4">Buvette Attalib</h3>
          <p class="mb-4">Votre snack préféré, livré où vous voulez sur le campus.</p>
          <div class="flex space-x-4 justify-center md:justify-start">
            <a href="#" aria-label="Facebook" class="hover:text-amber-400 transition">
              <span class="material-symbols-outlined">facebook</span>
            </a>
            <a href="#" aria-label="Instagram" class="hover:text-amber-400 transition">
              <span class="material-symbols-outlined">instagram</span>
            </a>
            <a href="#" aria-label="Twitter" class="hover:text-amber-400 transition">
              <span class="material-symbols-outlined">twitter</span>
            </a>
          </div>
        </div>
        
        <div class="text-center">
          <h3 class="font-bold text-lg mb-4">Liens utiles</h3>
          <ul class="space-y-2">
            <li><a href="#menu" class="hover:text-amber-400 transition">Menu</a></li>
            <li><a href="#about" class="hover:text-amber-400 transition">À propos</a></li>
            <li><a href="#contact" class="hover:text-amber-400 transition">Contact</a></li>
            <li><a href="#" class="hover:text-amber-400 transition">FAQ</a></li>
          </ul>
        </div>
        
        <div class="text-center md:text-right">
          <h3 class="font-bold text-lg mb-4">Contactez-nous</h3>
          <p class="mb-2">
            <span class="material-symbols-outlined align-middle mr-2">mail</span>
            contact@buvette-attalib.ma
          </p>
          <p class="mb-2">
            <span class="material-symbols-outlined align-middle mr-2">phone</span>
            +212 6 12 34 56 78
          </p>
          <p>
            <span class="material-symbols-outlined align-middle mr-2">schedule</span>
            Lundi-Vendredi: 8h-18h
          </p>
        </div>
      </div>
      
      <div class="border-t border-gray-800 mt-8 pt-8 text-center text-sm text-gray-400">
        <p>© 2023 Buvette Attalib. Tous droits réservés.</p>
      </div>
    </div>
  </footer>

  <!-- JavaScript -->
  <script>
    // Mobile Menu Toggle
    document.addEventListener('DOMContentLoaded', function() {
      const menuButton = document.querySelector('.mobile-menu-button');
      const mobileMenu = document.querySelector('.mobile-menu');
      
      menuButton.addEventListener('click', function() {
        mobileMenu.classList.toggle('hidden');
      });
      
      // Close mobile menu when clicking on a link
      document.querySelectorAll('.mobile-menu a').forEach(link => {
        link.addEventListener('click', () => {
          mobileMenu.classList.add('hidden');
        });
      });
      
      // Cart functionality
      let cart = [];
      const addToCartButtons = document.querySelectorAll('.add-to-cart');
      const orderButtons = document.querySelectorAll('.order-btn');
      const orderModal = document.getElementById('order-modal');
      const closeModalButton = document.querySelector('.close-modal');
      const cartItemsContainer = document.getElementById('cart-items');
      const cartTotalElement = document.getElementById('cart-total');
      const orderForm = document.getElementById('order-form');
      const orderToast = document.getElementById('order-toast');
      
      // Add to cart
      addToCartButtons.forEach(button => {
        button.addEventListener('click', function() {
          const item = this.getAttribute('data-item');
          const price = parseFloat(this.getAttribute('data-price'));
          
          // Add item to cart
          cart.push({ item, price });
          updateCart();
          
          // Show toast notification
          orderToast.classList.remove('hidden');
          setTimeout(() => {
            orderToast.classList.add('hidden');
          }, 3000);
        });
      });
      
      // Open order modal
      orderButtons.forEach(button => {
        button.addEventListener('click', function() {
          orderModal.classList.remove('hidden');
          document.body.style.overflow = 'hidden';
        });
      });
      
      // Close order modal
      closeModalButton.addEventListener('click', function() {
        orderModal.classList.add('hidden');
        document.body.style.overflow = '';
      });
      
      // Close modal when clicking outside
      orderModal.addEventListener('click', function(e) {
        if (e.target === orderModal) {
          orderModal.classList.add('hidden');
          document.body.style.overflow = '';
        }
      });
      
      // Update cart display
      function updateCart() {
        cartItemsContainer.innerHTML = '';
        
        if (cart.length === 0) {
          cartItemsContainer.innerHTML = '<p class="text-gray-500 py-8 text-center">Votre panier est vide</p>';
          cartTotalElement.textContent = '0 Dhs';
          return;
        }
        
        // Group items by name and count quantities
        const itemCounts = {};
        cart.forEach(item => {
          if (!itemCounts[item.item]) {
            itemCounts[item.item] = { ...item, quantity: 0 };
          }
          itemCounts[item.item].quantity++;
        });
        
        // Display grouped items
        Object.values(itemCounts).forEach(item => {
          const itemElement = document.createElement('div');
          itemElement.className = 'flex justify-between items-center py-2 border-b border-gray-200';
          itemElement.innerHTML = `
            <div>
              <span class="font-medium">${item.item}</span>
              <span class="text-sm text-gray-500">${item.price} Dhs</span>
            </div>
            <div class="flex items-center">
              <button class="decrease-item px-2 text-gray-500 hover:text-black" data-item="${item.item}">-</button>
              <span class="mx-2">${item.quantity}</span>
              <button class="increase-item px-2 text-gray-500 hover:text-black" data-item="${item.item}">+</button>
              <button class="remove-item ml-4 text-red-500 hover:text-red-700" data-item="${item.item}">
                <span class="material-symbols-outlined text-lg">delete</span>
              </button>
            </div>
          `;
          cartItemsContainer.appendChild(itemElement);
        });
        
        // Calculate total
        const total = cart.reduce((sum, item) => sum + item.price, 0);
        cartTotalElement.textContent = `${total} Dhs`;
        
        // Add event listeners to quantity buttons
        document.querySelectorAll('.decrease-item').forEach(button => {
          button.addEventListener('click', function() {
            const itemName = this.getAttribute('data-item');
            removeFromCart(itemName);
          });
        });
        
        document.querySelectorAll('.increase-item').forEach(button => {
          button.addEventListener('click', function() {
            const itemName = this.getAttribute('data-item');
            const item = cart.find(i => i.item === itemName);
            if (item) {
              cart.push({ ...item });
              updateCart();
            }
          });
        });
        
        document.querySelectorAll('.remove-item').forEach(button => {
          button.addEventListener('click', function() {
            const itemName = this.getAttribute('data-item');
            cart = cart.filter(i => i.item !== itemName);
            updateCart();
          });
        });
      }
      
      // Remove one instance of an item from cart
      function removeFromCart(itemName) {
        const index = cart.findIndex(i => i.item === itemName);
        if (index !== -1) {
          cart.splice(index, 1);
          updateCart();
        }
      }
      
      // Form submission
      orderForm.addEventListener('submit', function(e) {
        e.preventDefault();
        
        if (cart.length === 0) {
          alert('Votre panier est vide !');
          return;
        }
        
        const name = document.getElementById('name').value;
        const phone = document.getElementById('phone').value;
        const location = document.getElementById('location').value;
        
        // Here you would normally send the order to your backend
        // For this example, we'll just show an alert
        const orderDetails = cart.reduce((acc, item) => {
          if (!acc[item.item]) {
            acc[item.item] = { quantity: 0, price: item.price };
          }
          acc[item.item].quantity++;
          return acc;
        }, {});
        
        let orderSummary = 'Détails de la commande:\n\n';
        for (const [item, details] of Object.entries(orderDetails)) {
          orderSummary += `${item} x${details.quantity} - ${details.price * details.quantity} Dhs\n`;
        }
        
        const total = cart.reduce((sum, item) => sum + item.price, 0);
        orderSummary += `\nTotal: ${total} Dhs\n`;
        orderSummary += `\nLivraison à: ${location}\n`;
        orderSummary += `Contact: ${name}, ${phone}`;
        
        alert(orderSummary);
        
        // Reset form and cart
        cart = [];
        updateCart();
        orderForm.reset();
        orderModal.classList.add('hidden');
        document.body.style.overflow = '';
      });
      
      // Animate elements when they come into view
      const animateOnScroll = function() {
        const elements = document.querySelectorAll('.fade-in');
        
        elements.forEach(element => {
          const elementPosition = element.getBoundingClientRect().top;
          const screenPosition = window.innerHeight / 1.3;
          
          if (elementPosition < screenPosition) {
            element.style.opacity = '1';
          }
        });
      };
      
      // Set initial opacity for fade-in elements
      document.querySelectorAll('.fade-in').forEach(el => {
        el.style.opacity = '0';
        el.style.transition = 'opacity 0.6s ease';
      });
      
      window.addEventListener('scroll', animateOnScroll);
      animateOnScroll(); // Run once on page load
    });
  </script>
</body>
</html>