<?php

namespace ZikraAuliya\FlipConnector\Requests\AgentVerification;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Create Agent Identity
 */
class CreateAgentIdentity extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/v2/agents';
    }

    public function __construct() {}
}
