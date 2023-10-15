<?php

namespace Raid\Core\Modules\Traits\Command;

trait WithRenameRepository
{
    /**
     * Rename repositories.
     */
    protected function renameRepository(string $modulePath, string $moduleName): void
    {
        $this->info('Renaming module repository...');

        $repositoryPath = "{$modulePath}/Repositories";

        $this->renameRepositoryClass($repositoryPath, $moduleName);
        $this->renameRepositoryContract($repositoryPath, $moduleName);
    }

    /**
     * Rename repository class.
     */
    private function renameRepositoryClass(string $repositoryPath, string $moduleName): void
    {
        $industryRepository = "{$repositoryPath}/IndustryRepository.php";

        $repository = "{$repositoryPath}/{$moduleName}Repository.php";

        $this->renameFile($industryRepository, $repository);
    }

    /**
     * Rename repository contract.
     */
    private function renameRepositoryContract(string $repositoryPath, string $moduleName): void
    {
        $industryRepositoryContract = "{$repositoryPath}/Contracts/IndustryRepositoryInterface.php";

        $repositoryContract = "{$repositoryPath}/Contracts/{$moduleName}RepositoryInterface.php";

        $this->renameFile($industryRepositoryContract, $repositoryContract);
    }
}
