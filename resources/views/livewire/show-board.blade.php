<div>
    @if ($board)
        <h2 class="text-xl font-semibold">{{ $board->name }}</h2>
        <div class="my-4">
            @foreach ($board->columns as $column)
                <div class="mb-4">
                    <h3 class="text-lg font-bold">{{ $column->name }}</h3>
                    @foreach ($column->cards as $card)
                        <x-kanban-board::card :card="$card" />
                    @endforeach

                    <div class="bg-white rounded shadow p-4 mb-4">
                        <div class="flex justify-between items-center mb-2">
                            <h4 class="text-lg font-semibold">Add card</h4>
                            <div class="flex items-center">
                                <button wire:click="$dispatch('addCardEvent')" class="text-blue-500 hover:text-blue-600 mr-2">
                                    +
                                </button>
                            </div>
                        </div>
                    </div>

                </div>
            @endforeach
                <button wire:click="$dispatch('createColumnEvent')">New Column</button>
        </div>
    @else
        <p>Board not found.</p>
    @endif
</div>
