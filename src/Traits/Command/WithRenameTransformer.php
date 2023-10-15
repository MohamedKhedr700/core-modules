<?php

namespace Raid\Core\Modules\Traits\Command;

trait WithRenameTransformer
{
    /**
     * Return transformer.
     */
    private function renameTransformer(string $modulePath, string $moduleName): void
    {
        $this->info('Renaming module transformer...');

        $transformerPath = "{$modulePath}/Http/Transformers";

        $industryTransformer = "{$transformerPath}/IndustryTransformer.php";

        $transformer = "{$transformerPath}/{$moduleName}Transformer.php";

        $this->renameFile($industryTransformer, $transformer);
    }
}
