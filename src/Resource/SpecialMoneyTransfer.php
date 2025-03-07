<?php

declare(strict_types=1);

namespace ZikraAuliya\FlipConnector\Resource;

use Saloon\Http\Response;
use ZikraAuliya\FlipConnector\Requests\SpecialMoneyTransfer\CreateSpecialDisbursement;
use ZikraAuliya\FlipConnector\Resource;

class SpecialMoneyTransfer extends Resource
{
    public function createSpecialDisbursement(): Response
    {
        return $this->connector->send(new CreateSpecialDisbursement);
    }
}
