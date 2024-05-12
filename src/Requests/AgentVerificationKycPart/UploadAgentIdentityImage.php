<?php

namespace ZikraAuliya\FlipConnector\Requests\AgentVerificationKycPart;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Upload Agent Identity Image
 */
class UploadAgentIdentityImage extends Request
{
    protected Method $method = Method::PUT;

    public function resolveEndpoint(): string
    {
        return "/v1/users/{$this->agentId}/identities";
    }

    public function __construct(
        protected string $agentId,
    ) {
    }
}
