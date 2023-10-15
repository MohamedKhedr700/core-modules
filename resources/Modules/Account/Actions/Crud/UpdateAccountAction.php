<?php

namespace Raid\Core\Modules\Account\Actions\Crud;

use Exception;
use Raid\Core\Modules\Account\Repositories\AccountRepository;
use Raid\Core\Actions\Contracts\Crud\UpdateActionInterface;
use Raid\Core\Actions\Crud\UpdateAction;
use Raid\Core\Models\Contracts\ModelInterface;

class UpdateAccountAction extends UpdateAction implements UpdateActionInterface
{
    /**
     * {@inheritDoc}
     */
    public const REPOSITORY = AccountRepository::class;

    /**
     * Find by account action.
     */
    private FindByAccountAction $findByAccountAction;

    /**
     * Constructor.
     */
    public function __construct(FindByAccountAction $findByAccountAction)
    {
        $this->findByAccountAction = $findByAccountAction;
    }

    /**
     * Execute the action.
     *
     * @throws Exception
     */
    public function handle(string|ModelInterface $id, array $data): ModelInterface
    {
        //        $this->validateEmailNotExists($data['email']);
        //        $this->validatePhoneNotExists($data['phone']);

        return $this->repository()->update($id, $data);
    }

    /**
     * Validate email not exists.
     *
     * @throws Exception
     */
    private function validateEmailNotExists(string $email): void
    {
        if (! $this->findByAccountAction->execute(['email' => $email])) {
            return;
        }

        throw new Exception('Email already exists.');
    }

    /**
     * Validate phone not exists.
     *
     * @throws Exception
     */
    private function validatePhoneNotExists(string $phone): void
    {
        if (! $this->findByAccountAction->execute(['phone' => $phone])) {
            return;
        }

        throw new Exception('Phone already exists.');
    }
}
