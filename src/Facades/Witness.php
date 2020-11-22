<?php


namespace Ahmeddabak\LaravelWitness\Facades;


use Illuminate\Support\Facades\Facade;

class Witness extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'witness';
    }
}
