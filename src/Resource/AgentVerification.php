<?php

namespace ZikraAuliya\FlipConnector\Resource;

use Saloon\Http\Response;
use ZikraAuliya\FlipConnector\Requests\AgentVerification\CreateAgentIdentity;
use ZikraAuliya\FlipConnector\Requests\AgentVerification\GetAgentIdentity;
use ZikraAuliya\FlipConnector\Requests\AgentVerification\UpdateAgentIdentity;
use ZikraAuliya\FlipConnector\Resource;

class AgentVerification extends Resource
{
    public function createAgentIdentity(): Response
    {
        return $this->connector->send(new CreateAgentIdentity());
    }

    public function updateAgentIdentity(string $agentId): Response
    {
        return $this->connector->send(new UpdateAgentIdentity($agentId));
    }

    public function getAgentIdentity(string $agentId): Response
    {
        return $this->connector->send(new GetAgentIdentity($agentId));
    }
}
