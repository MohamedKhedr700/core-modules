<?php

namespace Raid\Core\Modules\Traits\Command;

trait WithRenameFactory
{
    /**
     * Rename factory.
     */
    private function renameFactory(string $modulePath, string $moduleName): void
    {
        $this->info('Renaming module factory...');

        $factoryPath = "{$modulePath}/Database/Factories";

        $industryFactory = "{$factoryPath}/IndustryFactory.php";

        $factory = "{$factoryPath}/{$moduleName}Factory.php";

        $this->renameFile($industryFactory, $factory);
    }
}
