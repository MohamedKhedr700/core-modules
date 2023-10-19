<?php

namespace Raid\Core\Modules\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Raid\Core\Modules\Traits\Command\WithRenameActions;
use Raid\Core\Modules\Traits\Command\WithRenameControllers;
use Raid\Core\Modules\Traits\Command\WithRenameGates;
use Raid\Core\Modules\Traits\Command\WithRenameLang;
use Raid\Core\Modules\Traits\Command\WithRenameModel;
use Raid\Core\Modules\Traits\Command\WithRenameRepository;
use Raid\Core\Modules\Traits\Command\WithRenameRequests;
use Raid\Core\Modules\Traits\Command\WithRenameService;
use Raid\Core\Modules\Traits\Command\WithRenameTraits;
use Raid\Core\Modules\Traits\Command\WithRenameTransformer;
use Raid\Core\Modules\Traits\Command\WithRenameUtility;

class RenameModuleCommand extends Command
{
    use WithRenameActions;
    use WithRenameControllers;
    use WithRenameGates;
    use WithRenameLang;
    use WithRenameModel;
    use WithRenameRepository;
    use WithRenameRequests;
    use WithRenameService;
    use WithRenameTraits;
    use WithRenameTransformer;
    use WithRenameUtility;

    /**
     * The name and signature of the console command.
     */
    protected $signature = 'core:rename-module 
                            {module : The name of the module}';

    /**
     * The console command description.
     */
    protected $description = 'Rename a module.';

    /**
     * Execute the console command.
     */
    public function handle(): int
    {
        $this->info('Renaming module...');

        $modulesNameSpace = config('modules.namespace');

        $module = $this->argument('module');

        $modulePath = "$modulesNameSpace/$module";

        $this->renameActions($modulePath, $module);
        $this->renameControllers($modulePath, $module);
        $this->renameGates($modulePath, $module);
        $this->renameLang($modulePath, $module);
        $this->renameModel($modulePath, $module);
        $this->renameModelFilter($modulePath, $module);
        $this->renameRepository($modulePath, $module);
        $this->renameRequests($modulePath, $module);
        $this->renameService($modulePath, $module);
        $this->renameTraits($modulePath, $module);
        $this->renameTransformer($modulePath, $module);
        $this->renameUtility($modulePath, $module);

        return static::SUCCESS;
    }

    /**
     * Rename file.
     */
    protected function renameFile(string $oldFile, string $newFile): void
    {
        File::move(app_path($oldFile), app_path($newFile));
    }
}
