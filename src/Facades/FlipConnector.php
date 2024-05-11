<?php

namespace ZikraAuliya\FlipConnector\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \ZikraAuliya\FlipConnector\FlipConnector
 */
class FlipConnector extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \ZikraAuliya\FlipConnector\FlipConnector::class;
    }
}
