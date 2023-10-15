<?php

namespace Raid\Core\Modules\Traits\Command;

trait WithRenameControllers
{
    /**
     * Rename controllers.
     */
    private function renameControllers(string $modulePath, string $moduleName): void
    {
        $this->info('Renaming module controllers...');

        $controllerPath = "{$modulePath}/Http/Controllers";

        $this->renameApplicationController($controllerPath, $moduleName);
        $this->renameDashboardController($controllerPath, $moduleName);
    }

    /**
     * Rename application controller.
     */
    private function renameApplicationController(string $controllerPath, string $moduleName): void
    {
        $industryApplicationController = "{$controllerPath}/Application/IndustryController.php";

        $applicationController = "{$controllerPath}/Application/{$moduleName}Controller.php";

        $this->renameFile($industryApplicationController, $applicationController);
    }

    /**
     * Rename dashboard controller.
     */
    private function renameDashboardController(string $controllerPath, string $moduleName): void
    {
        $industryDashboardController = "{$controllerPath}/Dashboard/IndustryController.php";

        $dashboardController = "{$controllerPath}/Dashboard/{$moduleName}Controller.php";

        $this->renameFile($industryDashboardController, $dashboardController);
    }
}
