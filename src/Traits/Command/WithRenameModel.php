<?php

namespace Raid\Core\Modules\Traits\Command;

trait WithRenameModel
{
    /**
     * Rename model.
     */
    private function renameModel(string $modulePath, string $moduleName): void
    {
        $this->info('Renaming module model...');

        $modelPath = "{$modulePath}/Models";

        $industryModel = "{$modelPath}/Industry.php";

        $model = "{$modelPath}/{$moduleName}.php";

        $this->renameFile($industryModel, $model);
    }

    /**
     * Rename model filter.
     */
    private function renameModelFilter(string $modulePath, string $moduleName): void
    {
        $this->info('Renaming module model filter...');

        $modelFilterPath = "{$modulePath}/Models/ModelFilter";

        $industryModelFilter = "$modelFilterPath/IndustryFilter.php";

        $modelFilter = "$modelFilterPath/{$moduleName}Filter.php";

        $this->renameFile($industryModelFilter, $modelFilter);
    }
}
