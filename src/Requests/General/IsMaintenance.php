<?php

namespace ZikraAuliya\FlipConnector\Requests\General;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Is Maintenance
 */
class IsMaintenance extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/v2/general/maintenance';
    }
}
