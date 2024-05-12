<?php

namespace ZikraAuliya\FlipConnector\Requests\AgentVerificationKycPart;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Repair Identity Image
 */
class RepairIdentityImage extends Request
{
    protected Method $method = Method::PUT;

    public function resolveEndpoint(): string
    {
        return "/v1/users/{$this->agentId}/repairPhoto";
    }

    public function __construct(
        protected string $agentId,
    ) {
    }
}
