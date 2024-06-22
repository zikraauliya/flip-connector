<?php

declare(strict_types=1);

namespace ZikraAuliya\FlipConnector\Requests\AcceptPayment;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get Bill
 */
class GetBill extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v2/pwf/{$this->billId}/bill";
    }

    public function __construct(
        protected string $billId,
    ) {}
}
