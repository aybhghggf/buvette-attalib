<div 
    x-data="{ show: true }" 
    x-show="show"
    style="z-index: 9999;"
    class="fixed top-4 right-4 bg-green-100 border border-green-400 text-green-800 px-4 py-3 rounded shadow-lg w-auto max-w-sm"
    role="alert"
    x-init="setTimeout(() => show = false, 4000)"
>
    <div class="flex justify-between items-center">
        <div>
            <strong class="font-bold">Succès !</strong>
            <span class="ml-2">{{ session('success') }}</span>
        </div>
        <button @click="show = false" class="text-green-700 hover:text-green-900 text-xl font-bold">&times;</button>
    </div>
</div>
