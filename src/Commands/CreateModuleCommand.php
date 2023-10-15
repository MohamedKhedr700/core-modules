<?php

namespace Raid\Core\Modules\Commands;

use Illuminate\Console\Command;

class CreateModuleCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'core:module 
                            {module : The name of the module}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new module.';

    /**
     * Execute the console command.
     */
    public function handle(): int
    {
        $moduleName = $this->argument('module');

        $this->createNwidartModule($moduleName);
        $this->renameModule($moduleName);

        return static::SUCCESS;
    }

    /**
     * Create a new module using nwidart/laravel-modules.
     */
    private function createNwidartModule(string $moduleName): void
    {
        $this->call('module:make', [
            'name' => [$moduleName],
        ]);
    }

    /**
     * Rename the module.
     */
    private function renameModule($moduleName): void
    {
        $this->call('core:rename-module', [
            'module' => $moduleName,
        ]);
    }
}
