<?php

declare(strict_types=1);

namespace ZikraAuliya\FlipConnector;

use Saloon\Http\Connector;

class Resource
{
    public function __construct(
        protected Connector $connector,
    ) {}
}
