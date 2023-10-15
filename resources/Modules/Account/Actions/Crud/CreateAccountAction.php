<?php

namespace Raid\Core\Modules\Account\Actions\Crud;

use Exception;
use Raid\Core\Modules\Account\Repositories\AccountRepository;
use Raid\Core\Actions\Contracts\Crud\CreateActionInterface;
use Raid\Core\Actions\Crud\CreateAction;
use Raid\Core\Models\Contracts\ModelInterface;

class CreateAccountAction extends CreateAction implements CreateActionInterface
{
    /**
     * {@inheritDoc}
     */
    public const REPOSITORY = AccountRepository::class;

    /**
     * Constructor.
     */
    public function __construct(
        private readonly FindByAccountAction $findByAccountAction
    ) {
    }

    /**
     * Execute the action.
     *
     * @throws Exception
     */
    public function handle(array $data): ModelInterface
    {
        //        $this->validateEmailNotExists($data['email']);
        //        $this->validatePhoneNotExists($data['phone']);

        return $this->repository()->create($data);
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
