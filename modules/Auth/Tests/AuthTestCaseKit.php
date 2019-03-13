<?php

    namespace Modules\Auth\Tests;

    use Modules\Auth\Database\Seeders\AuthDatabaseSeeder;
    use Tests\TestCase;

    /**
     * Class AuthTestCaseKit
     *
     * @package Modules\Auth\Tests
     */
    abstract class AuthTestCaseKit
        extends TestCase
    {
        /**
         * Initializes the modules' test case environment.
         */
        public function setUp(): void
        {
            parent::setUp();

            \Artisan::call('db:seed', ['--class' => AuthDatabaseSeeder::class]);
        }
    }
