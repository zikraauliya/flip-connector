<?php

declare(strict_types=1);

namespace ZikraAuliya\FlipConnector\Requests\InternationalTransfer;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Create International Transfer
 */
class CreateInternationalTransfer extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/v2/international-disbursement';
    }

    public function __construct() {}
}
