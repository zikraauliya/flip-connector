<?php

namespace ZikraAuliya\FlipConnector\Requests\AcceptPayment;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Edit Bill
 */
class EditBill extends Request
{
    protected Method $method = Method::PUT;

    public function resolveEndpoint(): string
    {
        return "/v2/pwf/{$this->billId}/bill";
    }

    public function __construct(
        protected string $billId,
    ) {}
}
