<?php

namespace ZikraAuliya\FlipConnector\Requests\InternationalTransfer;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get Exchange Rates
 */
class GetExchangeRates extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/v2/international-disbursement/exchange-rates';
    }

    /**
     * @param  null|string  $countryIsoCode  (Optional) - Country code using ISO 3166 (Alpha-3). You can choose multiple countries separate by comma. See supported Country ISO Codes in API Docs.
     * @param  null|string  $transactionType  (Optional) - Transaction type information. Possible values are: C2C, C2B
     */
    public function __construct(
        protected ?string $countryIsoCode = null,
        protected ?string $transactionType = null,
    ) {}

    public function defaultQuery(): array
    {
        return array_filter(['country_iso_code' => $this->countryIsoCode, 'transaction_type' => $this->transactionType]);
    }
}
