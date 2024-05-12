<?php

namespace ZikraAuliya\FlipConnector\Requests\AgentVerificationKycPart;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Repair Identity-Selfie Image
 */
class RepairIdentitySelfieImage extends Request
{
    protected Method $method = Method::PUT;

    public function resolveEndpoint(): string
    {
        return "/v1/users/{$this->agentId}/repairSelfie";
    }

    public function __construct(
        protected string $agentId,
    ) {
    }
}
