<?php

namespace Raid\Core\Modules\Traits\Provider;

trait WithProviderHelper
{
    /**
     * Module repository.
     */
    public const REPOSITORY = '';

    /**
     * Get module repository.
     */
    public static function repository(): string
    {
        return static::REPOSITORY;
    }

    /**
     * Get module utility.
     */
    public static function getUtility(): string
    {
        return static::repository()::utility();
    }

    /**
     * Get module name.
     */
    public static function getModule(bool $upper = false)
    {
        return static::getUtility()::module($upper);
    }

    /**
     * Get a module model.
     */
    public static function getModel(): string
    {
        return static::getUtility()::getModel();
    }

    /**
     * Get route service provider.
     */
    public static function getRouteServiceProvider(): string
    {
        return static::getUtility()::getRouteServiceProvider();
    }
}
