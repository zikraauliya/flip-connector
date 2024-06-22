<?php

declare(strict_types=1);

namespace ZikraAuliya\FlipConnector\Requests\SpecialMoneyTransfer;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Create Special Disbursement
 */
class CreateSpecialDisbursement extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/v3/special-disbursement';
    }

    public function __construct() {}
}
