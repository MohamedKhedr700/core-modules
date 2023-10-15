<?php

namespace Raid\Core\Modules\Traits\Command;

trait WithRenameActions
{
    /**
     * Rename actions.
     */
    private function renameActions(string $modulePath, string $module): void
    {
        $actionPath = "{$modulePath}/Actions";

        $this->renameCrudActions($actionPath, $module);
    }

    /**
     * Rename crud actions.
     */
    private function renameCrudActions(string $actionPath, string $module): void
    {
        $this->info('Renaming crud module actions...');

        $actionPath = "{$actionPath}/Crud";

        $this->renameCreateAction($actionPath, $module);
        $this->renameListAction($actionPath, $module);
        $this->renameFindAction($actionPath, $module);
        $this->renameFindByAction($actionPath, $module);
        $this->renameUpdateAction($actionPath, $module);
        $this->renameDeleteAction($actionPath, $module);
    }

    /**
     * Rename create action.
     */
    private function renameCreateAction(string $actionPath, string $module): void
    {
        $createIndustryAction = "{$actionPath}/CreateIndustryAction.php";

        $createAction = "{$actionPath}/Create{$module}Action.php";

        $this->renameFile($createIndustryAction, $createAction);
    }

    /**
     * Rename list action.
     */
    private function renameListAction(string $actionPath, string $module): void
    {
        $listIndustryAction = "{$actionPath}/ListIndustryAction.php";

        $listAction = "{$actionPath}/List{$module}Action.php";

        $this->renameFile($listIndustryAction, $listAction);
    }

    /**
     * Rename find action.
     */
    private function renameFindAction(string $actionPath, string $module): void
    {
        $findIndustryAction = "{$actionPath}/FindIndustryAction.php";

        $findAction = "{$actionPath}/Find{$module}Action.php";

        $this->renameFile($findIndustryAction, $findAction);
    }

    /**
     * Rename find by action.
     */
    private function renameFindByAction(string $actionPath, string $module): void
    {
        $findByIndustryAction = "{$actionPath}/FindByIndustryAction.php";

        $findByAction = "{$actionPath}/FindBy{$module}Action.php";

        $this->renameFile($findByIndustryAction, $findByAction);
    }

    /**
     * Rename update action.
     */
    private function renameUpdateAction(string $actionPath, string $module): void
    {
        $updateIndustryAction = "{$actionPath}/UpdateIndustryAction.php";

        $updateAction = "{$actionPath}/Update{$module}Action.php";

        $this->renameFile($updateIndustryAction, $updateAction);
    }

    /**
     * Rename delete action.
     */
    private function renameDeleteAction(string $actionPath, string $module): void
    {
        $deleteIndustryAction = "{$actionPath}/DeleteIndustryAction.php";

        $deleteAction = "{$actionPath}/Delete{$module}Action.php";

        $this->renameFile($deleteIndustryAction, $deleteAction);
    }
}
