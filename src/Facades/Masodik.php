<?php

namespace Alex\Masodik\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Alex\Masodik\Masodik
 */
class Masodik extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Alex\Masodik\Masodik::class;
    }
}
