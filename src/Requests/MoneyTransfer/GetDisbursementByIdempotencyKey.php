<?php

declare(strict_types=1);

namespace ZikraAuliya\FlipConnector\Requests\MoneyTransfer;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get Disbursement by Idempotency Key
 */
class GetDisbursementByIdempotencyKey extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/v3/get-disbursement';
    }

    /**
     * @param  null|string  $idempotencyKey  (Required) - Transaction Idempotency Key
     */
    public function __construct(
        protected ?string $idempotencyKey = null,
    ) {}

    public function defaultQuery(): array
    {
        return array_filter(['idempotency-key' => $this->idempotencyKey]);
    }
}
