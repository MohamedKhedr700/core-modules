<?php

namespace Raid\Core\Modules\Traits\Command;

trait WithRenameLang
{
    /**
     * Rename lang.
     */
    private function renameLang(string $modulePath, string $moduleName): void
    {
        $this->info('Renaming module lang...');

        $langPath = "{$modulePath}/Resources/lang";

        $this->renameLangClass($langPath, $moduleName);
    }

    /**
     * Rename lang class.
     */
    private function renameLangClass(string $langPath, string $moduleName): void
    {
        $langClass = "{$langPath}/IndustryUtility.php";

        $lang = "{$langPath}/{$moduleName}Utility.php";

        $this->renameFile($langClass, $lang);
    }
}
