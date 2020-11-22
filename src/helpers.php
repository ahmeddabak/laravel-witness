<?php

use Ahmeddabak\LaravelWitness\Witness;

if (!function_exists('witness')) {
    function witness($event)
    {
        return (new Witness())->setEvent($event);
    }
}
