<?php

namespace Adityafullstackdeveloper\LaravelBill4time\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Adityafullstackdeveloper\LaravelBill4time\LaravelBill4time
 */
class LaravelBill4time extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Adityafullstackdeveloper\LaravelBill4time\LaravelBill4time::class;
    }
}
