<?php


namespace Ahmeddabak\LaravelWitness\Tests;

use Ahmeddabak\LaravelWitness\Models\History;

class HistoryTest extends TestCase
{
    /** @test */
    public function it_persists_events_to_the_database()
    {
        $history = new History();

        $history->event = 'Test';

        $history->save();

        $this->assertDatabaseCount('histories', 1);
    }
}
