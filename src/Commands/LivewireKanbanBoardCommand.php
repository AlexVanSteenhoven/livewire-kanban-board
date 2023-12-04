<?php

namespace ModusDigital\LivewireKanbanBoard\Commands;

use Illuminate\Console\Command;

class LivewireKanbanBoardCommand extends Command
{
    public $signature = 'livewire-kanban-board';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
