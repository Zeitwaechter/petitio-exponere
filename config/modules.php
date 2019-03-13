<?php

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
            'enabled'      => false,
            'path'         => base_path() . '/vendor/nwidart/laravel-modules/src/Commands/stubs',
            'files'        => [
                'routes/web'      => 'Http/Routes/http.php',
                'routes/api'      => 'Api/Routes/api.php',
                'views/index'     => 'Resources/views/index.blade.php',
                'views/master'    => 'Resources/views/layouts/master.blade.php',
                'scaffold/config' => 'Config/config.php',
                'composer'        => 'composer.json',
                'assets/js/app'   => 'Resources/assets/js/app.js',
                'assets/sass/app' => 'Resources/assets/sass/app.scss',
                'webpack'         => 'webpack.mix.js',
                'package'         => 'package.json',
            ],
            'replacements' => [
                'routes/web'      => ['LOWER_NAME', 'STUDLY_NAME'],
                'routes/api'      => ['LOWER_NAME'],
                'webpack'         => ['LOWER_NAME'],
                'json'            => ['LOWER_NAME', 'STUDLY_NAME', 'MODULE_NAMESPACE'],
                'views/index'     => ['LOWER_NAME'],
                'views/master'    => ['LOWER_NAME', 'STUDLY_NAME'],
                'scaffold/config' => ['STUDLY_NAME'],
                'composer'        => [
                    'LOWER_NAME',
                    'STUDLY_NAME',
                    'VENDOR',
                    'AUTHOR_NAME',
                    'AUTHOR_EMAIL',
                    'MODULE_NAMESPACE',
                ],
            ],
            'gitkeep'      => true,
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

            'modules' => base_path('modules'),
            /*
            |--------------------------------------------------------------------------
            | Modules assets path
            |--------------------------------------------------------------------------
            |
            | Here you may update the modules assets path.
            |
            */

            'assets' => public_path('Modules'),

            /*
            |--------------------------------------------------------------------------
            | The migrations path
            |--------------------------------------------------------------------------
            |
            | Where you run 'module:publish-migration' command, where do you publish the
            | the migration files?
            |
            */

            'migration' => base_path('Database/Migrations'),

            /*
            |--------------------------------------------------------------------------
            | Generator path
            |--------------------------------------------------------------------------
            | Customise the paths where the folders will be generated.
            | Set the generate key to false to not generate that folder
            */
            'generator' => [
                'api_controller'                            => ['path' => 'Api/Controllers', 'generate' => true],
                'api_filter'                                => ['path' => 'Api/Middleware', 'generate' => true],
                'api_request'                               => ['path' => 'Api/Requests', 'generate' => true],
                'api_routes'                                => ['path' => 'Api/Routes', 'generate' => true],
                'config'                                    => ['path' => 'Config', 'generate' => true],
                'command'                                   => ['path' => 'Console', 'generate' => true],
                'migration'                                 => ['path' => 'Database/Migrations', 'generate' => true],
                'seeder'                                    => ['path' => 'Database/Seeders', 'generate' => true],
                'factory'                                   => ['path' => 'Database/Factories', 'generate' => true],
                'model'                                     => ['path' => 'Entities', 'generate' => true],
                'model_traits_attributes'                   => ['path' => 'Entities/Traits/Attributes', 'generate' => true],
                'model_traits_scopes'                       => ['path' => 'Entities/Traits/Scopes', 'generate' => true],
                'model_traits_methods'                      => ['path' => 'Entities/Traits/Methods', 'generate' => true],
                'model_traits_relationships'                => ['path' => 'Entities/Traits/Relationships', 'generate' => true],
                'http_controller'                           => ['path' => 'Http/Controllers', 'generate' => true],
                'http_filter'                               => ['path' => 'Http/Middleware', 'generate' => true],
                'http_request'                              => ['path' => 'Http/Requests', 'generate' => true],
                'http_routes'                               => ['path' => 'Http/Routes', 'generate' => true],
                'provider'                                  => ['path' => 'Providers', 'generate' => true],
                'assets'                                    => ['path' => 'Resources/assets', 'generate' => true],
                'assets_sass'                               => ['path' => 'Resources/assets/scss', 'generate' => true],
                'assets_stylus'                             => ['path' => 'Resources/assets/stylus', 'generate' => true],
                'assets_js_vue'                             => ['path' => 'Resources/assets/js/vue', 'generate' => true],
                'assets_js_vue_components'                  => ['path' => 'Resources/assets/js/vue/components', 'generate' => true],
                'assets_js_vue_components_modules'          => ['path' => 'Resources/assets/js/vue/components/modules', 'generate' => true],
                'assets_js_vue_components_store'            => ['path' => 'Resources/assets/js/vue/components/store', 'generate' => true],
                'assets_js_vue_components_utils_containers' => ['path' => 'Resources/assets/js/vue/components/utils/containers', 'generate' => true],
                'assets_js_vue_components_utils_modals'     => ['path' => 'Resources/assets/js/vue/components/utils/modals', 'generate' => true],
                'lang'                                      => ['path' => 'Resources/lang', 'generate' => true],
                'lang_de'                                   => ['path' => 'Resources/lang/de', 'generate' => true],
                'lang_en'                                   => ['path' => 'Resources/lang/en', 'generate' => true],
                'views_namespaces'                          => ['path' => 'Resources/views/namespaces', 'generate' => true],
                'views_partials'                            => ['path' => 'Resources/views/partials', 'generate' => true],
                'views_layouts'                             => ['path' => 'Resources/views/layouts', 'generate' => true],
                'test'                                      => ['path' => 'Tests', 'generate' => true],
                'repository'                                => ['path' => 'Repositories', 'generate' => true],
                'event'                                     => ['path' => 'Events', 'generate' => true],
                'listener'                                  => ['path' => 'Listeners', 'generate' => true],
                'policies'                                  => ['path' => 'Policies', 'generate' => true],
                'rules'                                     => ['path' => 'Rules', 'generate' => true],
                'jobs'                                      => ['path' => 'Jobs', 'generate' => true],
                'emails'                                    => ['path' => 'Emails', 'generate' => false],
                'notifications'                             => ['path' => 'Notifications', 'generate' => true],
                'resource'                                  => ['path' => 'Transformers', 'generate' => true],
            ],
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
            'paths'   => [
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
            'vendor' => 'zeitwaechter',
            'author' => [
                'name'  => 'Marcel Ludwig',
                'email' => 'jobs@marcelludwig.de',
            ],
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
            'enabled'  => false,
            'key'      => 'laravel-modules',
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
            'files'        => 'register',
        ],
    ];
