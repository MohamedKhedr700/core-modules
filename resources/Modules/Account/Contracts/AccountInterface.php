<?php

namespace Raid\Core\Modules\Account\Contracts;

interface AccountInterface
{
    /**
     * Get an account type statically.
     */
    public static function accountType(): string;

    /**
     * Get account ID.
     */
    public function accountId(): string;
}
