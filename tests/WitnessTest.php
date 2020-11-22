<?php


namespace Ahmeddabak\LaravelWitness\Tests;


use Ahmeddabak\LaravelWitness\Witness;

class WitnessTest extends TestCase
{
    /** @test */
    public function it_persists_the_ip_to_the_database()
    {
        (new Witness())->setEvent('Test');

        $this->assertDatabaseHas('histories', [
            'ip' => request()->ip()
        ]);
    }
}
