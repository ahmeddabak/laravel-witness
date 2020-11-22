<?php


namespace Ahmeddabak\History\Tests;

use Ahmeddabak\History\Models\Witness;

class HistoryTest extends TestCase
{
    /** @test */
    public function it_persists_events_to_the_database()
    {
        $history = new Witness();

        $history->event = 'Test';

        $history->save();

        $this->assertDatabaseCount('witnesses', 1);
    }
}
