<?php

namespace Ahmeddabak\History\Facades;

use Illuminate\Support\Facades\Facade;

class History extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'history';
    }
}
