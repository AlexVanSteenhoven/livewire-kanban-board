<?php

namespace ModusDigital\KanbanBoard\Livewire;

use Livewire\Component;
use ModusDigital\KanbanBoard\Models\Board;

class ShowBoard extends Component
{
    public $slug;
    public $board;

    public function mount(string $slug): void
    {
        $this->slug = $slug;
        $this->loadBoard();
    }

    public function loadBoard(): void
    {
        $this->board = Board::with(['columns.cards'])->where('slug', '=', $this->slug);
    }

    public function render()
    {
        return view('kanban-board::livewire.show-board');
    }
}
