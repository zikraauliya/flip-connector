<?php

namespace ZikraAuliya\FlipConnector\Requests\AgentVerification;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get Agent Identity
 */
class GetAgentIdentity extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v2/agents/{$this->agentId}";
    }

    public function __construct(
        protected string $agentId,
    ) {}
}
