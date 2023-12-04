<?php

namespace ModusDigital\LivewireKanbanBoard;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use ModusDigital\LivewireKanbanBoard\Commands\LivewireKanbanBoardCommand;

class LivewireKanbanBoardServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('livewire-kanban-board')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_livewire-kanban-board_table')
            ->hasCommand(LivewireKanbanBoardCommand::class);
    }
}
