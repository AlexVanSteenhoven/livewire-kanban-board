<?php

namespace ModusDigital\KanbanBoard\Livewire;

use Livewire\Component;
use ModusDigital\KanbanBoard\Models\Board;
use ModusDigital\KanbanBoard\Models\Column;
use ModusDigital\KanbanBoard\Models\Card;

class ShowBoard extends Component
{
    public $slug;
    public $board;

    protected $listeners = [
        'addColumnEvent' => 'addColumn',
        'editCardEvent' => 'editCard',
        'deleteCardEvent' => 'deleteCard',
    ];

    public function mount(string $slug): void
    {
        $this->slug = $slug;
        $this->loadBoard();
    }

    public function loadBoard(): void
    {
        $this->board = Board::with(['columns.cards'])->where('slug', '=', $this->slug);
    }

    public function addColumn(string $columnName)
    {
        $maxOrder = $this->board->columns->max('order');
        $boardId = $this->board->id;

        $newColumn = Column::create([
            'name' => $columnName,
            'order' => $maxOrder + 1,
            'board_id' => $boardId,
        ]);

        $newColumn->save();
    }

    public function editColumn($columnId, $columnName)
    {
        $column = Column::find($columnId);
        $column->name = $columnName;
        $column->save();

        $this->loadBoard();
    }

    public function removeColumn(int $columnId)
    {
        $column = Column::find($columnId);

        if ($column) {
            $column->delete();

            $this->loadBoard();
        }
    }

    public function addCard($columnId, $cardTitle, $cardDescription)
    {
        $maxOrder = Column::find($columnId)->cards()->max('order');

        $newCard = Card::create([
            'title' => $cardTitle,
            'description' => $cardDescription,
            'order' => $maxOrder + 1,
            'column_id' => $columnId,
        ]);

        $newCard->save();
        $this->loadBoard();
    }

    public function editCard($cardId, $cardTitle, $cardDescription)
    {
        $card = Card::find($cardId);

        if ($card) {
            $card->title = $cardTitle;
            $card->description = $cardDescription;
            $card->save();

            $this->loadBoard();
        }
    }

    public function deleteCard($cardId)
    {
        $card = Card::find($cardId);
        if ($card) {
            $card->delete();

            $this->loadBoard();
        }
    }


    public function render()
    {
        return view('kanban-board::livewire.show-board');
    }
}
