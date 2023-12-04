<div>
    @if ($board)
        <h2 class="text-xl font-semibold">{{ $board->name }}</h2>
        <div class="my-4">
            @foreach ($board->columns as $column)
                <div class="mb-4">
                    <h3 class="text-lg font-bold">{{ $column->name }}</h3>
                    @foreach ($column->cards as $card)
                        <div class="mt-2 p-2 bg-gray-200 rounded shadow">
                            <p class="font-medium">{{ $card->title }}</p>
                            <p>{{ $card->description }}</p>
                        </div>
                    @endforeach
                </div>
            @endforeach
        </div>
    @else
        <p>Board not found.</p>
    @endif
</div>
