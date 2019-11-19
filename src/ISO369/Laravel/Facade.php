<?php

namespace ISO369\Laravel;

use ISO369\ISO639;

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