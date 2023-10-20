<?php

namespace Raid\Core\Modules\Traits\Provider;

trait WithModule
{
    /**
     * Module name.
     */
    public const MODULE = '';

    /**
     * Get module name.
     */
    public static function module(): string
    {
        return static::MODULE;
    }
}