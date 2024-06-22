<?php

declare(strict_types=1);

namespace ZikraAuliya\FlipConnector\Requests\General;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get Bank Info
 */
class GetBankInfo extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/v2/general/banks';
    }

    public function __construct() {}
}
