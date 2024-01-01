<?php

namespace MarvinRabe\FilamentIntl\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \MarvinRabe\FilamentIntl\FilamentIntl
 */
class FilamentIntl extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \MarvinRabe\FilamentIntl\FilamentIntl::class;
    }
}
