<?php

namespace ModusDigital\KanbanBoard\Livewire;

use Livewire\Component;
use ModusDigital\KanbanBoard\Models\Board;

class AllBoards extends Component
{
    public $boards;

    public function mount()
    {
        $this->boards = Board::paginate(config('kanban-board.general.pagination', 10));
    }

    public function render()
    {
        return view('kanban-board::livewire.all-boards');
    }
}
