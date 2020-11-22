<?php

namespace Ahmeddabak\History\Tests;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Orchestra\Testbench\TestCase as BaseTestCase;

class TestCase extends BaseTestCase
{
    use RefreshDatabase;

    protected function getEnvironmentSetUp($app)
    {
        require_once __DIR__.'/../database/migrations/create_witnesses_table.php';

        (new \CreateWitnessesTable)->up();
    }
}
