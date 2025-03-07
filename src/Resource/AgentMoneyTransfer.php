<?php

declare(strict_types=1);

namespace ZikraAuliya\FlipConnector\Resource;

use Saloon\Http\Response;
use ZikraAuliya\FlipConnector\Requests\AgentMoneyTransfer\CreateAgentDisbursement;
use ZikraAuliya\FlipConnector\Requests\AgentMoneyTransfer\GetAgentDisbursementById;
use ZikraAuliya\FlipConnector\Requests\AgentMoneyTransfer\GetAgentDisbursementList;
use ZikraAuliya\FlipConnector\Resource;

class AgentMoneyTransfer extends Resource
{
    public function createAgentDisbursement(): Response
    {
        return $this->connector->send(new CreateAgentDisbursement);
    }

    public function getAgentDisbursementById(string $transactionId): Response
    {
        return $this->connector->send(new GetAgentDisbursementById($transactionId));
    }

    /**
     * @param  string  $agentId  (Optional) - The agent ID that wants to be retrieved. If not provided, will return all agent disbursement for the company instead.
     * @param  string  $pagination  (Optional) - The pagination of the result. Default value is 20.
     * @param  string  $page  (Optional) - The page number of the result to be viewed.
     * @param  string  $sortBy  (Optional) - Sort the result by the attribute. Use the attribute name (e.g sort=id) to sort in ascending order or dash+attribute name (e.g sort=-id) to sort in descending order.
     */
    public function getAgentDisbursementList(
        ?string $agentId,
        ?string $pagination,
        ?string $page,
        ?string $sortBy,
    ): Response {
        return $this->connector->send(new GetAgentDisbursementList($agentId, $pagination, $page, $sortBy));
    }
}
