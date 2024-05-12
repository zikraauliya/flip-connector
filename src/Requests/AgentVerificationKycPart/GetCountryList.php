<?php

namespace ZikraAuliya\FlipConnector\Requests\AgentVerificationKycPart;

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
        return '/v1/countries';
    }

    /**
     * @param  null|string  $userType  (Required) - The value should be: 1 (user type Agent)
     */
    public function __construct(
        protected ?string $userType = null,
    ) {
    }

    public function defaultQuery(): array
    {
        return array_filter(['user_type' => $this->userType]);
    }
}
