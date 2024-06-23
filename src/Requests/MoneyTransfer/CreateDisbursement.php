<?php

declare(strict_types=1);

namespace ZikraAuliya\FlipConnector\Requests\MoneyTransfer;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;
use ZikraAuliya\FlipConnector\DTO\DisbursementPayload;

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

    public function __construct(
        protected ?DisbursementPayload $payload = null
    ) {}

    /**
     * Default Body
     *
     * @return array<int, int|string>
     */
    public function defaultBody(): array
    {
        if (! is_null($this->payload)) {
            /** @var array<int, int|string> $payload */
            $payload = $this->payload->toArray();

            return $payload;
        }

        return [];
    }
}
