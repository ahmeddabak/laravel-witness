<?php


namespace Ahmeddabak\LaravelWitness\Tests;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Orchestra\Testbench\TestCase as BaseTestCase;

class TestCase extends BaseTestCase
{
    use RefreshDatabase;

    protected function getEnvironmentSetUp($app)
    {
        require_once __DIR__ . '/../database/migrations/create_histories_table.php';

        (new \CreateHistoriesTable)->up();
    }
}
