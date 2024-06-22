<?php

namespace ZikraAuliya\FlipConnector\Requests\AgentMoneyTransfer;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get Agent Disbursement by ID
 */
class GetAgentDisbursementById extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v2/agent-disbursements/{$this->transactionId}";
    }

    public function __construct(
        protected string $transactionId,
    ) {}
}
