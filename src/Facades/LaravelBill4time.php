<?php

namespace Adityakdevin\LaravelBill4time\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Adityakdevin\LaravelBill4time\LaravelBill4time
 */
class LaravelBill4time extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Adityakdevin\LaravelBill4time\LaravelBill4time::class;
    }
}
