<?php

namespace Raid\Core\Modules\Account\Http\Controllers\Dashboard;

use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\JsonResponse;
use Raid\Core\Modules\Account\Actions\Crud\CreateAccountAction;
use Raid\Core\Modules\Account\Actions\Crud\DeleteAccountAction;
use Raid\Core\Modules\Account\Actions\Crud\FindAccountAction;
use Raid\Core\Modules\Account\Actions\Crud\ListAccountAction;
use Raid\Core\Modules\Account\Actions\Crud\PatchAccountAction;
use Raid\Core\Modules\Account\Actions\Crud\UpdateAccountAction;
use Raid\Core\Modules\Account\Http\Requests\StoreAccountRequest;
use Raid\Core\Modules\Account\Http\Requests\UpdateAccountRequest;
use Raid\Core\Modules\Account\Models\Account;
use Raid\Core\Modules\Account\Repositories\AccountRepository;
use Raid\Core\Exceptions\UnvalidatedRequestException;
use Raid\Core\Http\Controllers\ApiController;
use Raid\Core\Modules\User\Http\Requests\ListUserRequest;

class AccountController extends ApiController
{
    /**
     * {@inheritdoc}
     */
    public const REPOSITORY = AccountRepository::class;

    /**
     * Store a new account.
     *
     * @throws AuthorizationException|UnvalidatedRequestException
     */
    public function store(StoreAccountRequest $request, CreateAccountAction $createAccountAction): JsonResponse
    {
        return parent::storeResource($request, $createAccountAction);
    }

    /**
     * List accounts.
     *
     * @throws AuthorizationException|UnvalidatedRequestException
     */
    public function list(ListUserRequest $request, ListAccountAction $indexAccountAction): JsonResponse
    {
        return parent::listResources($request, $indexAccountAction);
    }

    /**
     * Show account.
     *
     * @throws AuthorizationException
     */
    public function show(Account $id, FindAccountAction $findAccountAction): JsonResponse
    {
        return parent::showResource($id, $findAccountAction);
    }

    /**
     * Update account.
     *
     * @throws AuthorizationException|UnvalidatedRequestException
     */
    public function update(UpdateAccountRequest $request, Account $id, UpdateAccountAction $updateAccountAction): JsonResponse
    {
        return parent::updateResource($request, $id, $updateAccountAction);
    }

    /**
     * Patch account.
     *
     * @throws AuthorizationException|UnvalidatedRequestException
     */
    public function patch(UpdateAccountRequest $request, Account $id, PatchAccountAction $patchAccountAction): JsonResponse
    {
        return parent::patchResource($request, $id, $patchAccountAction);
    }

    /**
     * Delete account.
     *
     * @throws AuthorizationException
     */
    public function delete(Account $id, DeleteAccountAction $deleteAccountAction): JsonResponse
    {
        return parent::deleteResource($id, $deleteAccountAction);
    }
}
