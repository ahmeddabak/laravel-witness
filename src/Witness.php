<?php


namespace Ahmeddabak\LaravelWitness;


use Ahmeddabak\LaravelWitness\Models\History;

class Witness
{
    protected History $history;

    public function __construct()
    {
        $this->getHistory();
    }

    public function getHistory()
    {
        $history = new History();

        $history->ip = $this->setIp(request()->ip());

        return $history;
    }

    public function setIp(string $ip)
    {
        $this->history->ip = $ip;

        return $this;
    }

    public function setEvent($event)
    {
        $this->history->event = $event;

        return $this;
    }

    public function __destruct()
    {
        $this->history->save();
    }
}
