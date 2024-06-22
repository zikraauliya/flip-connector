<?php

namespace ZikraAuliya\FlipConnector\Requests\AgentVerification;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Update Agent Identity
 */
class UpdateAgentIdentity extends Request
{
    protected Method $method = Method::PUT;

    public function resolveEndpoint(): string
    {
        return "/v2/agents/{$this->agentId}";
    }

    public function __construct(
        protected string $agentId,
    ) {}
}
