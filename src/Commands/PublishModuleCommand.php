<?php

namespace Raid\Core\Modules\Commands;

use Raid\Core\Command\Commands\PublishCommand;

class PublishModuleCommand extends PublishCommand
{
    /**
     * The console command name.
     */
    protected $name = 'core:publish-module';

    /**
     * The console command description.
     */
    protected $description = 'Publish core module config files.';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $this->publishCommand('module-config');
        $this->publishCommand('module-stubs');
    }
}
