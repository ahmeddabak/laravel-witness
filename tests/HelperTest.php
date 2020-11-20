<?php

namespace Ahmeddabak\LaravelWitness\Tests;

use PHPUnit\Framework\TestCase;

class HelperTest extends TestCase
{
    /** @test */
    public function helper_method_exists()
    {
        $this->assertTrue(function_exists('witness'));
    }
}
