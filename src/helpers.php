<?php

use Ahmeddabak\History\History;

if (! function_exists('witness')) {
    function witness($event)
    {
        return (new History())->setEvent($event);
    }
}
