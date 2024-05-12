<?php

namespace ZikraAuliya\FlipConnector\Requests\CityCountry;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get City List
 */
class GetCityList extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/v2/disbursement/city-list';
    }
}