 <!-- Hero Section -->
    <section class="relative overflow-hidden hero-bg">
      <div class="container mx-auto px-4 pt-32 pb-16 md:pt-48 md:pb-24">
        <div class="grid md:grid-cols-2 gap-8 items-center">
          <div class="text-center md:text-left fade-in">
            <h1 class="text-5xl md:text-7xl lg:text-8xl">
              <span class="font-kalam text-black">Online Snaks</span>
              <span class="font-poppins-black text-white block -mt-2 md:-mt-4">DELIVERY</span>
            </h1>
            <p class="mt-4 text-lg md:text-xl text-black max-w-md mx-auto md:mx-0">
              Un clic suffit pour savourer le meilleur de la pause étudiante !
            </p>
            <div class="mt-8">
              <a href="{{ route('menu') }}" class="inline-block bg-black text-white font-bold py-4 px-10 rounded-full text-lg hover:bg-gray-800 transition duration-300 order-btn">
                COMMANDER MAINTENANT
              </a>
              <p class="mt-4 text-sm text-black font-semibold">buvette-attalib.ma</p>
            </div>
          </div>
          
          <div class="relative h-64 md:h-auto md:block hidden fade-in">
            <img 
              alt="Snacks marocains variés"
              class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[500px] h-auto object-cover rounded-full shadow-2xl border-8 border-white"
              src="{{ asset('images/student.png') }}"
              loading="lazy"
            />
          </div>
        </div>
      </div>
    </section>

    