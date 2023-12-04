<?php

namespace ModusDigital\KanbanBoard\Facades;

use Illuminate\Support\Facades\Facade;

class KanbanBoard extends Facade
{
    public static function getFacadeAccessor(): string
    {
        return 'kanban-board';
    }
}
