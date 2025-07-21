<div
    x-data="{ show: true }"
    x-show="show"
    style="z-index: 9999;"
    class="fixed top-16 right-4 bg-red-100 border border-red-400 text-red-800 px-4 py-3 rounded shadow-lg w-auto max-w-sm flex items-center space-x-3"
    role="alert"
    x-init="setTimeout(() => show = false, 4000)"
>
    <strong class="font-semibold">Erreur !</strong>
    <span class="flex-1">Une erreur s'est produite. Veuillez réessayer.</span>
    <button
        @click="show = false"
        class="text-red-700 hover:text-red-900 text-xl font-bold ml-2"
        aria-label="Fermer l'alerte"
    >
        &times;
    </button>
</div>
