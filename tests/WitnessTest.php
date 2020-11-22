<?php

namespace Ahmeddabak\History\Tests;

use Ahmeddabak\History\History;

class WitnessTest extends TestCase
{
    /** @test */
    public function it_persists_the_ip_to_the_database()
    {
        $ip = '123.123.123.123';

        (new History())->setEvent('Test')->setIp($ip);

        $this->assertDatabaseHas('Witnesses', [
            'ip' => $ip,
        ]);
    }

    /** @test */
    public function it_detects_the_ip_if_none_was_given()
    {
        (new History())->setEvent('Test');

        $this->assertDatabaseHas('Witnesses', [
            'ip' => request()->ip(),
        ]);
    }
}
