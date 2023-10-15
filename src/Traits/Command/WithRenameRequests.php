<?php

namespace Raid\Core\Modules\Traits\Command;

trait WithRenameRequests
{
    /**
     * Rename requests.
     */
    private function renameRequests(string $modulePath, string $moduleName): void
    {
        $this->info('Renaming module requests...');

        $requestPath = "{$modulePath}/Http/Requests";

        $this->renameStoreRequest($requestPath, $moduleName);
        $this->renameUpdateRequest($requestPath, $moduleName);
        $this->renameListRequest($requestPath, $moduleName);
    }

    /**
     * Rename store request.
     */
    private function renameStoreRequest(string $requestPath, string $moduleName): void
    {
        $storeIndustryRequest = "{$requestPath}/StoreIndustryRequest.php";

        $storeRequest = "{$requestPath}/Store{$moduleName}Request.php";

        $this->renameFile($storeIndustryRequest, $storeRequest);
    }

    /**
     * Rename update request.
     */
    private function renameUpdateRequest(string $requestPath, string $moduleName): void
    {
        $updateIndustryRequest = "{$requestPath}/UpdateIndustryRequest.php";

        $updateRequest = "{$requestPath}/Update{$moduleName}Request.php";

        $this->renameFile($updateIndustryRequest, $updateRequest);
    }

    /**
     * Rename list request.
     */
    private function renameListRequest(string $requestPath, string $moduleName): void
    {
        $listIndustryRequest = "{$requestPath}/ListIndustryRequest.php";

        $listRequest = "{$requestPath}/List{$moduleName}Request.php";

        $this->renameFile($listIndustryRequest, $listRequest);
    }
}
