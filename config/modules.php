<?php

use Nwidart\Modules\Activators\FileActivator;
use Nwidart\Modules\Commands;

return [

    /*
    |--------------------------------------------------------------------------
    | Module Namespace
    |--------------------------------------------------------------------------
    |
    | Default module namespace.
    |
    */

    'namespace' => 'Modules',

    /*
    |--------------------------------------------------------------------------
    | Module Stubs
    |--------------------------------------------------------------------------
    |
    | Default module stubs.
    |
    */

    'stubs' => [
        'enabled' => false,
        'path' => base_path().'/app/Console/laravel-modules/stubs',
        'files' => [
            'views/index' => 'Resources/views/index.blade.php',
            'views/master' => 'Resources/views/layouts/master.blade.php',
            'scaffold/config' => 'Config/config.php',
            'composer' => 'composer.json',
            'assets/js/app' => 'Resources/assets/js/app.js',
            'assets/sass/app' => 'Resources/assets/sass/app.scss',
            'vite' => 'vite.config.js',
            'package' => 'package.json',
            'repositories/repository' => 'Repositories/IndustryRepository.php',
            'repositories/contracts/contract' => 'Repositories/Contracts/IndustryRepositoryInterface.php',
            'services/service' => 'Services/IndustryService.php',
            'controllers/dashboard-controller' => 'Http/Controllers/Dashboard/IndustryController.php',
            'controllers/application-controller' => 'Http/Controllers/Application/IndustryController.php',
            'models/model' => 'Models/Industry.php',
            'transformers/transformer' => 'Http/Transformers/IndustryTransformer.php',
            'traits/request/with-common-rules' => 'Traits/Request/WithIndustryCommonRules.php',
            'requests/store-request' => 'Http/Requests/StoreIndustryRequest.php',
            'requests/update-request' => 'Http/Requests/UpdateIndustryRequest.php',
            'requests/list-request' => 'Http/Requests/ListIndustryRequest.php',
            'model-filters/model-filter' => 'Models/ModelFilter/IndustryFilter.php',
            'routes/application/web' => 'Routes/Application/web.php',
            'routes/application/api' => 'Routes/Application/api.php',
            'routes/dashboard/web' => 'Routes/Dashboard/web.php',
            'routes/dashboard/api' => 'Routes/Dashboard/api.php',
            'utilities/utility' => 'Utilities/IndustryUtility.php',
            'utilities/contracts/contract' => 'Utilities/Contracts/IndustryUtilityInterface.php',
            'actions/crud/create-action' => 'Actions/Crud/CreateIndustryAction.php',
            'actions/crud/list-action' => 'Actions/Crud/ListIndustryAction.php',
            'actions/crud/find-action' => 'Actions/Crud/FindIndustryAction.php',
            'actions/crud/find-by-action' => 'Actions/Crud/FindByIndustryAction.php',
            'actions/crud/update-action' => 'Actions/Crud/UpdateIndustryAction.php',
            'actions/crud/delete-action' => 'Actions/Crud/DeleteIndustryAction.php',
            'gates/gate' => 'Http/Gates/IndustryGate.php',
            'lang/en' => 'Resources/lang/en/industry.php',
        ],
        'replacements' => [
            'vite' => ['LOWER_NAME'],
            'json' => ['LOWER_NAME', 'STUDLY_NAME', 'MODULE_NAMESPACE', 'PROVIDER_NAMESPACE'],
            'views/index' => ['LOWER_NAME'],
            'views/master' => ['LOWER_NAME', 'STUDLY_NAME'],
            'scaffold/config' => ['STUDLY_NAME', 'MODULE_NAMESPACE'],
            'composer' => ['LOWER_NAME', 'STUDLY_NAME', 'VENDOR', 'AUTHOR_NAME', 'AUTHOR_EMAIL', 'MODULE_NAMESPACE', 'PROVIDER_NAMESPACE'],
            'repositories/repository' => ['MODULE_NAMESPACE', 'STUDLY_NAME'],
            'repositories/contracts/contract' => ['MODULE_NAMESPACE', 'STUDLY_NAME'],
            'services/service' => ['MODULE_NAMESPACE', 'STUDLY_NAME'],
            'controllers/dashboard-controller' => ['MODULE_NAMESPACE', 'STUDLY_NAME'],
            'controllers/application-controller' => ['MODULE_NAMESPACE', 'STUDLY_NAME'],
            'models/model' => ['MODULE_NAMESPACE', 'STUDLY_NAME'],
            'transformers/transformer' => ['MODULE_NAMESPACE', 'STUDLY_NAME', 'LOWER_NAME'],
            'traits/request/with-common-rules' => ['MODULE_NAMESPACE', 'STUDLY_NAME'],
            'requests/store-request' => ['MODULE_NAMESPACE', 'STUDLY_NAME'],
            'requests/update-request' => ['MODULE_NAMESPACE', 'STUDLY_NAME'],
            'requests/list-request' => ['MODULE_NAMESPACE', 'STUDLY_NAME'],
            'model-filters/model-filter' => ['MODULE_NAMESPACE', 'STUDLY_NAME'],
            'routes/application/web' => ['LOWER_NAME', 'STUDLY_NAME'],
            'routes/application/api' => ['LOWER_NAME', 'MODULE_NAMESPACE', 'STUDLY_NAME'],
            'routes/dashboard/web' => ['LOWER_NAME', 'STUDLY_NAME'],
            'routes/dashboard/api' => ['LOWER_NAME', 'MODULE_NAMESPACE', 'STUDLY_NAME'],
            'utilities/utility' => ['LOWER_NAME', 'MODULE_NAMESPACE', 'STUDLY_NAME'],
            'utilities/contracts/contract' => ['LOWER_NAME', 'MODULE_NAMESPACE', 'STUDLY_NAME'],
            'actions/crud/create-action' => ['LOWER_NAME', 'MODULE_NAMESPACE', 'STUDLY_NAME'],
            'actions/crud/list-action' => ['LOWER_NAME', 'MODULE_NAMESPACE', 'STUDLY_NAME'],
            'actions/crud/find-action' => ['LOWER_NAME', 'MODULE_NAMESPACE', 'STUDLY_NAME'],
            'actions/crud/find-by-action' => ['LOWER_NAME', 'MODULE_NAMESPACE', 'STUDLY_NAME'],
            'actions/crud/update-action' => ['LOWER_NAME', 'MODULE_NAMESPACE', 'STUDLY_NAME'],
            'actions/crud/delete-action' => ['LOWER_NAME', 'MODULE_NAMESPACE', 'STUDLY_NAME'],
            'gates/gate' => ['LOWER_NAME', 'MODULE_NAMESPACE', 'STUDLY_NAME', 'LOWER_NAME'],
        ],
        'gitkeep' => false,
    ],
    'paths' => [
        /*
        |--------------------------------------------------------------------------
        | Modules path
        |--------------------------------------------------------------------------
        |
        | This path used for save the generated module. This path also will be added
        | automatically to list of scanned folders.
        |
        */

        'modules' => base_path('app/Modules'),
        /*
        |--------------------------------------------------------------------------
        | Modules assets path
        |--------------------------------------------------------------------------
        |
        | Here you may update the modules assets path.
        |
        */

        'assets' => public_path('app/modules'),
        /*
        |--------------------------------------------------------------------------
        | The migrations path
        |--------------------------------------------------------------------------
        |
        | Where you run 'module:publish-migration' command, where do you publish the
        | the migration files?
        |
        */

        'migration' => base_path('database/migrations'),
        /*
        |--------------------------------------------------------------------------
        | Generator path
        |--------------------------------------------------------------------------
        | Customise the paths where the folders will be generated.
        | Set the generate key to false to not generate that folder
        */
        'generator' => [
            'config' => ['path' => 'Config', 'generate' => true],
            'command' => ['path' => 'Console', 'generate' => true],
            'migration' => ['path' => 'Database/Migrations', 'generate' => true],
            'seeder' => ['path' => 'Database/Seeders', 'generate' => true],
            'factory' => ['path' => 'Database/factories', 'generate' => true],
            'controller' => ['path' => 'Http/Controllers', 'generate' => false],
            'filter' => ['path' => 'Http/Middleware', 'generate' => true],
            'request' => ['path' => 'Http/Requests', 'generate' => true],
            'provider' => ['path' => 'Providers', 'generate' => true],
            'assets' => ['path' => 'Resources/assets', 'generate' => false],
            'lang' => ['path' => 'Resources/lang', 'generate' => true],
            'views' => ['path' => 'Resources/views', 'generate' => false],
            'test' => ['path' => 'Tests/Unit', 'generate' => true],
            'test-feature' => ['path' => 'Tests/Feature', 'generate' => true],
            'event' => ['path' => 'Events', 'generate' => false],
            'listener' => ['path' => 'Listeners', 'generate' => false],
            'policies' => ['path' => 'Policies', 'generate' => false],
            'rules' => ['path' => 'Rules', 'generate' => false],
            'jobs' => ['path' => 'Jobs', 'generate' => false],
            'emails' => ['path' => 'Emails', 'generate' => false],
            'notifications' => ['path' => 'Notifications', 'generate' => false],
            'resource' => ['path' => 'Transformers', 'generate' => false],
            'component-view' => ['path' => 'Resources/views/components', 'generate' => false],
            'component-class' => ['path' => 'View/Components', 'generate' => false],
            'model' => ['path' => 'Models', 'generate' => false],
            'repository' => ['path' => 'Repositories', 'generate' => true],
            'transformer' => ['path' => 'Http/Transformers', 'generate' => true],
            'modelFilter' => ['path' => 'Models/ModelFilter', 'generate' => true],
            'service' => ['path' => 'Services', 'generate' => true],
            'routes-application' => ['path' => 'Routes/Application', 'generate' => true],
            'routes-dashboard' => ['path' => 'Routes/Dashboard', 'generate' => true],
            'utilities' => ['path' => 'Utilities', 'generate' => true],
            'actions-crud' => ['path' => 'Actions/Crud', 'generate' => true],
            'events' => ['path' => 'Events', 'generate' => true],
            'listeners' => ['path' => 'Listeners', 'generate' => true],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Package commands
    |--------------------------------------------------------------------------
    |
    | Here you can define which commands will be visible and used in your
    | application. If for example you don't use some of the commands provided
    | you can simply comment them out.
    |
    */
    'commands' => [
        Commands\CommandMakeCommand::class,
        Commands\ComponentClassMakeCommand::class,
        Commands\ComponentViewMakeCommand::class,
        Commands\ControllerMakeCommand::class,
        Commands\DisableCommand::class,
        Commands\DumpCommand::class,
        Commands\EnableCommand::class,
        Commands\EventMakeCommand::class,
        Commands\JobMakeCommand::class,
        Commands\ListenerMakeCommand::class,
        Commands\MailMakeCommand::class,
        Commands\MiddlewareMakeCommand::class,
        Commands\NotificationMakeCommand::class,
        Commands\ProviderMakeCommand::class,
        Commands\RouteProviderMakeCommand::class,
        Commands\InstallCommand::class,
        Commands\ListCommand::class,
        Commands\ModuleDeleteCommand::class,
        Commands\ModuleMakeCommand::class,
        Commands\FactoryMakeCommand::class,
        Commands\PolicyMakeCommand::class,
        Commands\RequestMakeCommand::class,
        Commands\RuleMakeCommand::class,
        Commands\MigrateCommand::class,
        Commands\MigrateFreshCommand::class,
        Commands\MigrateRefreshCommand::class,
        Commands\MigrateResetCommand::class,
        Commands\MigrateRollbackCommand::class,
        Commands\MigrateStatusCommand::class,
        Commands\MigrationMakeCommand::class,
        Commands\ModelMakeCommand::class,
        Commands\PublishCommand::class,
        Commands\PublishConfigurationCommand::class,
        Commands\PublishMigrationCommand::class,
        Commands\PublishTranslationCommand::class,
        Commands\SeedCommand::class,
        Commands\SeedMakeCommand::class,
        Commands\SetupCommand::class,
        Commands\UnUseCommand::class,
        Commands\UpdateCommand::class,
        Commands\UseCommand::class,
        Commands\ResourceMakeCommand::class,
        Commands\TestMakeCommand::class,
        Commands\LaravelModulesV6Migrator::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Scan Path
    |--------------------------------------------------------------------------
    |
    | Here you define which folder will be scanned. By default will scan vendor
    | directory. This is useful if you host the package in packagist website.
    |
    */

    'scan' => [
        'enabled' => false,
        'paths' => [
            base_path('vendor/*/*'),
        ],
    ],
    /*
    |--------------------------------------------------------------------------
    | Composer File Template
    |--------------------------------------------------------------------------
    |
    | Here is the config for composer.json file, generated by this package
    |
    */

    'composer' => [
        'vendor' => 'mohamed.khedr',
        'author' => [
            'name' => 'Mohamed Khedr',
            'email' => 'mohamedkhedr700@gmail.com',
        ],
        'composer-output' => false,
    ],

    /*
    |--------------------------------------------------------------------------
    | Caching
    |--------------------------------------------------------------------------
    |
    | Here is the config for setting up caching feature.
    |
    */
    'cache' => [
        'enabled' => false,
        'driver' => 'file',
        'key' => 'laravel-modules',
        'lifetime' => 60,
    ],
    /*
    |--------------------------------------------------------------------------
    | Choose what laravel-modules will register as custom namespaces.
    | Setting one to false will require you to register that part
    | in your own Service Provider class.
    |--------------------------------------------------------------------------
    */
    'register' => [
        'translations' => true,
        /**
         * load files on boot or register method
         *
         * Note: boot not compatible with asgardcms
         *
         * @example boot|register
         */
        'files' => 'register',
    ],

    /*
    |--------------------------------------------------------------------------
    | Activators
    |--------------------------------------------------------------------------
    |
    | You can define new types of activators here, file, database etc. The only
    | required parameter is 'class'.
    | The file activator will store the activation status in storage/installed_modules
    */
    'activators' => [
        'file' => [
            'class' => FileActivator::class,
            'statuses-file' => base_path('modules_statuses.json'),
            'cache-key' => 'activator.installed',
            'cache-lifetime' => 604800,
        ],
    ],

    'activator' => 'file',
];
