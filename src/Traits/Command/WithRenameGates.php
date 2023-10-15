<?php

namespace Raid\Core\Modules\Traits\Command;

trait WithRenameGates
{
    /**
     * Rename gates.
     */
    private function renameGates(string $modulePath, string $moduleName): void
    {
        $this->info('Renaming module gates...');

        $gatePath = "{$modulePath}/Http/Gates";

        $this->renameGate($gatePath, $moduleName);
    }

    /**
     * Rename gate.
     */
    private function renameGate(string $gatePath, string $moduleName): void
    {
        $industryGate = "{$gatePath}/IndustryGate.php";

        $gateFile = "{$gatePath}/{$moduleName}Gate.php";

        $this->renameFile($industryGate, $gateFile);
    }
}
