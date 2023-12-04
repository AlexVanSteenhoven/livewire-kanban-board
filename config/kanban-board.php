<?php

return [
    'models' => [
        'user' => \App\Models\User::class,
        'board' => \ModusDigital\KanbanBoard\Models\Board::class,
        'column' => \ModusDigital\KanbanBoard\Models\Column::class,
        'card' => \ModusDigital\KanbanBoard\Models\Card::class,
    ],

    'tables' => [
        'prefix' => 'kanban_', // Prefix for all table names
        'boards' => config('kanban-board.tables.prefix') . 'boards',
        'columns' => config('kanban-board.tables.prefix') . 'columns',
        'cards' => config('kanban-board.tables.prefix') . 'cards',
    ],

    // General settings for the Kanban Board
    'general' => [
        'default_board_name' => 'My Kanban Board',  // Default name for new boards
        'allow_multiple_boards' => true,            // Whether users can create multiple boards
        'pagination' => 10,                         // Number of boards to show per page
    ],

    // Settings related to columns in the Kanban Board
    'columns' => [
        'default_columns' => ['To Do', 'In Progress', 'Done'], // Default columns for a new board
        'limit_per_board' => 5,                                 // Max number of columns per board
    ],

    // Settings for cards
    'cards' => [
        'max_length_title' => 100,                  // Maximum length of card title
        'max_length_description' => 1000,           // Maximum length of card description
    ],

    // User interface settings
    'ui' => [
        'theme' => 'auto',                          // Default UI theme, e.g., 'light', 'dark', or 'auto' to use system theme
        'drag_and_drop_animation_speed' => 300,     // Speed of drag and drop animations in milliseconds
    ],
];
