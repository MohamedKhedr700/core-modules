<?php

namespace Raid\Core\Modules\Traits\Command;

trait WithRenameTraits
{
    /**
     * Rename traits.
     */
    private function renameTraits(string $modulePath, string $moduleName): void
    {
        $this->info('Renaming module traits...');

        $traitPath = "{$modulePath}/Traits";

        $this->renameValidationTraits($traitPath, $moduleName);
    }

    /**
     * Rename validation traits.
     */
    private function renameValidationTraits(string $traitPath, string $moduleName): void
    {
        $validationTraitPath = "{$traitPath}/Request";

        $withIndustryCommonRules = "{$validationTraitPath}/WithIndustryCommonRules.php";

        $withCommonRules = "{$validationTraitPath}/With{$moduleName}CommonRules.php";

        $this->renameFile($withIndustryCommonRules, $withCommonRules);
    }
}
