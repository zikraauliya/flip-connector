<?php

namespace ZikraAuliya\FlipConnector;

use Saloon\Http\Connector;

class Resource
{
    public function __construct(
        protected Connector $connector,
    ) {
    }
}
