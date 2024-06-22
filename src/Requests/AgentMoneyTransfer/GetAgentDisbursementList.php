<?php

namespace ZikraAuliya\FlipConnector\Requests\AgentMoneyTransfer;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get Agent Disbursement List
 */
class GetAgentDisbursementList extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/v2/agent-disbursements';
    }

    /**
     * @param  null|string  $agentId  (Optional) - The agent ID that wants to be retrieved. If not provided, will return all agent disbursement for the company instead.
     * @param  null|string  $pagination  (Optional) - The pagination of the result. Default value is 20.
     * @param  null|string  $page  (Optional) - The page number of the result to be viewed.
     * @param  null|string  $sortBy  (Optional) - Sort the result by the attribute. Use the attribute name (e.g sort=id) to sort in ascending order or dash+attribute name (e.g sort=-id) to sort in descending order.
     */
    public function __construct(
        protected ?string $agentId = null,
        protected ?string $pagination = null,
        protected ?string $page = null,
        protected ?string $sortBy = null,
    ) {}

    public function defaultQuery(): array
    {
        return array_filter(['agent_id' => $this->agentId, 'pagination' => $this->pagination, 'page' => $this->page, 'sort_by' => $this->sortBy]);
    }
}
