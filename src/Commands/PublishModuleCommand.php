<?php

namespace Raid\Core\Modules\Commands;

use Raid\Core\Command\Commands\PublishCommand;

class PublishModuleCommand extends PublishCommand
{
    /**
     * The console command name.
     */
    protected $name = 'core:publish-modules';

    /**
     * The console command description.
     */
    protected $description = 'Publish core modules config files.';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $this->publishCommand('modules-config');
        $this->publishCommand('modules-stubs');
    }
}
