<?php

declare(strict_types=1);

namespace ZikraAuliya\FlipConnector\Resource;

use Saloon\Http\Response;
use ZikraAuliya\FlipConnector\Requests\General\GetBalance;
use ZikraAuliya\FlipConnector\Requests\General\GetBankInfo;
use ZikraAuliya\FlipConnector\Requests\General\GetMaintenance;
use ZikraAuliya\FlipConnector\Resource;

class General extends Resource
{
    public function getBalance(): Response
    {
        return $this->connector->send(new GetBalance);
    }

    public function getBankInfo(): Response
    {
        return $this->connector->send(new GetBankInfo);
    }

    public function getMaintenance(): Response
    {
        return $this->connector->send(new GetMaintenance);
    }
}
