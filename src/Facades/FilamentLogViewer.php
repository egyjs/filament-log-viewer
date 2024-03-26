<?php

namespace Egyjs\FilamentLogViewer\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Egyjs\FilamentLogViewer\FilamentLogViewer
 */
class FilamentLogViewer extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Egyjs\FilamentLogViewer\FilamentLogViewer::class;
    }
}
