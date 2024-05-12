<?php

namespace ZikraAuliya\FlipConnector\Requests\AgentVerificationKycPart;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Repair Data
 */
class RepairData extends Request
{
    protected Method $method = Method::PUT;

    public function resolveEndpoint(): string
    {
        return "/v1/users/{$this->agentId}/repair";
    }

    public function __construct(
        protected string $agentId,
    ) {
    }
}
