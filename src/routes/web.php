<?php

use Illuminate\Support\Facades\Route;
use ModusDigital\KanbanBoard\Livewire\AllBoards;
use ModusDigital\KanbanBoard\Livewire\ShowBoard;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('boards', AllBoards::class)->name('kanban-board.index');
Route::get('board/{slug}', ShowBoard::class)->name('kanban-board.show');
