<?php

namespace ZikraAuliya\FlipConnector\Requests\MoneyTransfer;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get Disbursement by ID
 */
class GetDisbursementById extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/v3/get-disbursement';
    }

    /**
     * @param  null|string  $id  (Required) - Transaction ID
     */
    public function __construct(
        protected ?string $id = null,
    ) {}

    public function defaultQuery(): array
    {
        return array_filter(['id' => $this->id]);
    }
}
