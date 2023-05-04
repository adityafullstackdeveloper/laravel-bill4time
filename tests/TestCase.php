<?php

namespace Adityafullstackdeveloper\LaravelBill4time\Tests;

use Adityafullstackdeveloper\LaravelBill4time\LaravelBill4timeServiceProvider;
use Illuminate\Database\Eloquent\Factories\Factory;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'Adityafullstackdeveloper\\LaravelBill4time\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            LaravelBill4timeServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        $migration = include __DIR__.'/../database/migrations/create_laravel-bill4time_table.php.stub';
        $migration->up();
        */
    }
}
