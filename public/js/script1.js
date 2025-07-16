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