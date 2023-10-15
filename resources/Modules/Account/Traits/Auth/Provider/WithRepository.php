<?php

namespace Raid\Core\Modules\Account\Traits\Auth\Provider;

use Raid\Core\Repositories\Contracts\RepositoryInterface;

trait WithRepository
{
    /**
     * Repository instance.
     */
    protected RepositoryInterface $repository;

    /**
     * Set login repository.
     */
    public function setRepository(RepositoryInterface $repository): void
    {
        $this->repository = $repository;
    }

    /**
     * Get login repository.
     */
    public function repository(): RepositoryInterface
    {
        return $this->repository;
    }
}
