<?php

declare(strict_types=1);

namespace ZikraAuliya\FlipConnector\Requests\MoneyTransfer;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Create Disbursement
 */
class CreateDisbursement extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/v3/disbursement';
    }

    public function __construct() {}
}
