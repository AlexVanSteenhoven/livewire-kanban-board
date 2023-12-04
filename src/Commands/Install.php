<?php

namespace ModusDigital\KanbanBoard\Commands;

use Illuminate\Console\Command;

class Install extends Command
{
    public $signature = 'kanban-board:install';

    public $description = 'Installs the kanban board package';

    public function handle(): void
    {
        $this->info('Installing kanban board...');

        $this->info('Publishing assets, database migrations, and configuration...');
        $this->callSilent('vendor:publish', ['--tag' => 'kanban-board-config', '--force' => true]);
        $this->callSilent('vendor:publish', ['--tag' => 'kanban-board-assets', '--force' => true]);
        $this->callSilent('vendor:publish', ['--tag' => 'kanban-board-livewire', '--force' => true]);
        $this->callSilent('vendor:publish', ['--tag' => 'kanban-board-migrations', '--force' => true]);

        $this->info('Migrating database...');
        $this->callSilent('migrate');

        $this->info('Kanban board installed successfully.');
    }
}
