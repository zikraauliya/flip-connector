<?php

declare(strict_types=1);

namespace ZikraAuliya\FlipConnector\Requests\AgentMoneyTransfer;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Create Agent Disbursement
 */
class CreateAgentDisbursement extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/v2/agent-disbursements';
    }

    public function __construct() {}
}
