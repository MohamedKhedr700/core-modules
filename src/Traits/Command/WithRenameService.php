<?php

namespace Raid\Core\Modules\Traits\Command;

trait WithRenameService
{
    /**
     * Rename service.
     */
    protected function renameService(string $modulePath, string $moduleName): void
    {
        $this->info('Renaming module service...');

        $servicePath = "{$modulePath}/Services";

        $industryService = "{$servicePath}/IndustryService.php";

        $service = "{$servicePath}/{$moduleName}Service.php";

        $this->renameFile($industryService, $service);
    }
}
