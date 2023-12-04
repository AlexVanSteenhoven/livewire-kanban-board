<?php

namespace ModusDigital\LivewireKanbanBoard\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \ModusDigital\LivewireKanbanBoard\LivewireKanbanBoard
 */
class LivewireKanbanBoard extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \ModusDigital\LivewireKanbanBoard\LivewireKanbanBoard::class;
    }
}
