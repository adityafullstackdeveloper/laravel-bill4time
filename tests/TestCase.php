<?php

namespace Adityakdevin\LaravelBill4time\Tests;

use Adityakdevin\LaravelBill4time\LaravelBill4timeServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app): array
    {
        return [
            LaravelBill4timeServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app): void
    {
        config()->set('database.default', 'testing');

        /*
        $migration = include __DIR__.'/../database/migrations/create_laravel-bill4time_table.php.stub';
        $migration->up();
        */
    }
}
