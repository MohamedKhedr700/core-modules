<?php

namespace Raid\Core\Modules\Providers;

use Illuminate\Support\ServiceProvider;
use Raid\Core\Modules\Commands\PublishModuleCommand;
use Raid\Core\Modules\Traits\Provider\WithModuleProvider;

class ModuleServiceProvider extends ServiceProvider
{
    use WithModuleProvider;

    /**
     * The commands to be registered.
     */
    protected array $commands = [
        PublishModuleCommand::class,
    ];

    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->registerConfig();
        $this->registerCommands();
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->registerStubs();
        $this->registerModule();
    }
}
