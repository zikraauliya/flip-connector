<?php

namespace ZikraAuliya\FlipConnector\Requests\General;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get Maintenance
 */
class GetMaintenance extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/v2/general/maintenance';
    }

    public function __construct() {}
}
