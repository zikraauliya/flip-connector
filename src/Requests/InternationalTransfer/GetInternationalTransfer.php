<?php

namespace ZikraAuliya\FlipConnector\Requests\InternationalTransfer;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get International Transfer
 */
class GetInternationalTransfer extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v2/international-disbursement/{$this->transactionId}";
    }

    public function __construct(
        protected string $transactionId,
    ) {
    }
}
