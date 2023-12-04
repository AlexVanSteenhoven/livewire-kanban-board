<?php

namespace ModusDigital\KanbanBoard;

use ModusDigital\KanbanBoard\Commands\Install;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class KanbanBoardServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('kanban-board')
            ->hasConfigFile('kanban-board')
            ->hasViews()
            ->hasCommand(Install::class);
    }

    public function register(): void
    {
        $this->app->bind('kanban-board', function ($app) {
            return new KanbanBoard();
        });
    }

    public function boot(): void
    {
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');

        if ($this->app->runningInConsole()) {
            $this->commands([
                Install::class,
            ]);
        }
    }
}
