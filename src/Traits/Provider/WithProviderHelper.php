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
     * Get module name lower.
     */
    public static function getModuleNameLower(): string
    {
        return static::getUtility()::module();
    }

    /**
     * Get module name upper.
     */
    public static function getModuleNameUpper(): string
    {
        return ucfirst(static::getUtility()::module());
    }

    /**
     * Get route service provider.
     */
    public static function getRouteServiceProvider(): string
    {
        return static::getUtility()::routeServiceProvider();
    }

    /**
     * Get a module model.
     */
    public static function getModel(): string
    {
        return static::getUtility()::model();
    }
}
