<div class="bg-white rounded shadow p-4 mb-4">
    <div class="flex justify-between items-center mb-2">
        <h4 class="text-lg font-semibold">{{ $card->title }}</h4>
        <div class="flex items-center">
            <button wire:click="$dispatch('editCardEvent', { id: {{ $card->id }} })" class="text-blue-500 hover:text-blue-600 mr-2">
                Edit
            </button>
            <button wire:click="$dispatch('deleteCardEvent', { id: {{ $card->id }} })" class="text-red-500 hover:text-red-600">
                Delete
            </button>
        </div>
    </div>
    <p>{{ $card->description }}</p>
</div>
