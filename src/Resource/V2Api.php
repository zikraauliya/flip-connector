<?php

declare(strict_types=1);

namespace ZikraAuliya\FlipConnector\Resource;

use Saloon\Http\Response;
use ZikraAuliya\FlipConnector\Requests\V2Api\CreateTopup;
use ZikraAuliya\FlipConnector\Resource;

class V2Api extends Resource
{
    public function createTopup(): Response
    {
        return $this->connector->send(new CreateTopup());
    }
}
