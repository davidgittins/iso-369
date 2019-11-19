<?php

namespace ISO639\Laravel;

use ISO639\ISO639;

class Facade extends \Illuminate\Support\Facades\Facade
{
    /**
     * {@inheritDoc}
     */
    protected static function getFacadeAccessor()
    {
        return ISO639::class;
    }
}