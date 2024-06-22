<?php

declare(strict_types=1);

namespace ZikraAuliya\FlipConnector\Requests\V2Api;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Create Topup
 */
class CreateTopup extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/v2/balance/top-up';
    }

    public function __construct() {}
}
