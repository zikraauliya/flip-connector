<?php

declare(strict_types=1);

namespace ZikraAuliya\FlipConnector\Resource;

use Saloon\Http\Response;
use ZikraAuliya\FlipConnector\Requests\BankAccountInquiry\BankAccountInquiry as BankAccountInquiryRequest;
use ZikraAuliya\FlipConnector\Resource;

class BankAccountInquiry extends Resource
{
    public function bankAccountInquiry(): Response
    {
        return $this->connector->send(new BankAccountInquiryRequest);
    }
}
