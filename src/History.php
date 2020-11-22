<?php

namespace Ahmeddabak\History;

use Ahmeddabak\History\Models\Witness;

class History
{
    private Witness $witness;

    public function __construct()
    {
        $this->witness = new Witness;
    }

//
//    public function getHistory()
//    {
//        $history = new History();
//
//        $history->ip = $this->setIp(request()->ip());
//
//        return $history;
//    }

    public function setIp(string $ip)
    {
        $this->witness->ip = $ip;

        return $this;
    }

    public function setEvent(string $event)
    {
        $this->witness->event = $event;

        return $this;
    }

    public function __destruct()
    {
        $this->witness->save();
    }
}
