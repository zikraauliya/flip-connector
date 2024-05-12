<?php

namespace ZikraAuliya\FlipConnector\Requests\InternationalTransfer;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get Form Data
 */
class GetFormData extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/v2/international-disbursement/form-data';
    }

    /**
     * @param  null|string  $countryIsoCode  (Required) - Country code using ISO 3166 (Alpha-3). See supported Country ISO Codes in API Docs.
     * @param  null|string  $transactionType  (Required) - Transaction type information. Possible values are: C2C, C2B
     */
    public function __construct(
        protected ?string $countryIsoCode = null,
        protected ?string $transactionType = null,
    ) {
    }

    public function defaultQuery(): array
    {
        return array_filter(['country_iso_code' => $this->countryIsoCode, 'transaction_type' => $this->transactionType]);
    }
}
