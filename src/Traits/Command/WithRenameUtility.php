<?php

namespace Raid\Core\Modules\Traits\Command;

trait WithRenameUtility
{
    /**
     * Rename utility.
     */
    private function renameUtility(string $modulePath, string $moduleName): void
    {
        $this->info('Renaming module utility...');

        $utilityPath = "{$modulePath}/Utilities";

        $this->renameUtilityClass($utilityPath, $moduleName);
        $this->renameUtilityContract($utilityPath, $moduleName);
    }

    /**
     * Rename utility class.
     */
    private function renameUtilityClass(string $utilityPath, string $moduleName): void
    {
        $utilityClass = "{$utilityPath}/IndustryUtility.php";

        $utility = "{$utilityPath}/{$moduleName}Utility.php";

        $this->renameFile($utilityClass, $utility);
    }

    /**
     * Rename utility contract.
     */
    private function renameUtilityContract(string $utilityPath, string $moduleName): void
    {
        $utilityContract = "{$utilityPath}/Contracts/IndustryUtilityInterface.php";

        $utilityInterface = "{$utilityPath}/Contracts/{$moduleName}UtilityInterface.php";

        $this->renameFile($utilityContract, $utilityInterface);
    }
}
