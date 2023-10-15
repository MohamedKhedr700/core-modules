<?php

namespace Raid\Core\Modules\Account\Traits\Auth\Provider;

use Raid\Core\Utilities\Errors;

trait WithErrors
{
    /**
     * Errors instance.
     */
    protected Errors $errors;

    /**
     * Get the errors handler instance.
     */
    public function errors(): Errors
    {
        if (! isset($this->errors)) {
            $this->errors = new Errors();
        }

        return $this->errors;
    }
}
