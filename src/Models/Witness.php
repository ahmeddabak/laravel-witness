<?php

namespace Ahmeddabak\History\Models;

use Illuminate\Database\Eloquent\Model;

class Witness extends Model
{
    protected $guarded = [];

    protected static function booted()
    {
        static::creating(function ($witness) {
            if (! $witness->ip) {
                $witness->ip = request()->ip();
            }
        });
    }
}
