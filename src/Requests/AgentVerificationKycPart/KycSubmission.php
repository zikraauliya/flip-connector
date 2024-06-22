<?php

namespace ZikraAuliya\FlipConnector\Requests\AgentVerificationKycPart;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * KYC Submission
 */
class KycSubmission extends Request
{
    protected Method $method = Method::PUT;

    public function resolveEndpoint(): string
    {
        return "/v1/users/{$this->agentId}/submit";
    }

    public function __construct(
        protected string $agentId,
    ) {}
}
