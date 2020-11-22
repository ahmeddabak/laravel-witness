<?php

namespace Ahmeddabak\History\Tests;

class HelperTest extends TestCase
{
    /** @test */
    public function helper_method_exists()
    {
        $this->assertTrue(function_exists('witness'));
    }

    /** @test */
    public function it_takes_an_event_as_parameter()
    {
        witness('user.created');

        $this->assertDatabaseHas('witnesses', [
            'event' => 'user.created'
        ]);
    }
}
