<?php

declare(strict_types=1);

namespace ZikraAuliya\FlipConnector\Requests\AgentVerificationKycPart;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get District List
 */
class GetDistrictList extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/v1/districts';
    }

    /**
     * @param  null|string  $userType  (Required) - The value should be: 1 (user type Agent)
     * @param  null|string  $cityId  (Optional) - City ID for filtering the districts
     */
    public function __construct(
        protected ?string $userType = null,
        protected ?string $cityId = null,
    ) {}

    public function defaultQuery(): array
    {
        return array_filter(['user_type' => $this->userType, 'city_id' => $this->cityId]);
    }
}
