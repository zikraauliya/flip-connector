<?php

namespace ZikraAuliya\FlipConnector\Requests\AgentVerificationKycPart;

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
        return '/v1/cities';
    }

    /**
     * @param  null|string  $userType  (Required) - The value should be: 1 (user type Agent)
     * @param  null|string  $provinceId  (Optional) - Province ID for filtering the cities
     */
    public function __construct(
        protected ?string $userType = null,
        protected ?string $provinceId = null,
    ) {
    }

    public function defaultQuery(): array
    {
        return array_filter(['user_type' => $this->userType, 'province_id' => $this->provinceId]);
    }
}
