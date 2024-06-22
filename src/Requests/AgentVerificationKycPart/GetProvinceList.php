<?php

declare(strict_types=1);

namespace ZikraAuliya\FlipConnector\Requests\AgentVerificationKycPart;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get Province List
 */
class GetProvinceList extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/v1/provinces';
    }

    /**
     * @param  null|string  $userType  (Required) - The value should be: 1 (user type Agent)
     * @param  null|string  $countryId  (Optional) - Country ID for filtering the provinces
     */
    public function __construct(
        protected ?string $userType = null,
        protected ?string $countryId = null,
    ) {}

    public function defaultQuery(): array
    {
        return array_filter(['user_type' => $this->userType, 'country_id' => $this->countryId]);
    }
}
