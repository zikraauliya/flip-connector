<?php

namespace ZikraAuliya\FlipConnector\Requests\CityCountry;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get Country List
 */
class GetCountryList extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/v2/disbursement/country-list';
    }

    public function __construct() {}
}
