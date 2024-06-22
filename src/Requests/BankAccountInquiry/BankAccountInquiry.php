<?php

declare(strict_types=1);

namespace ZikraAuliya\FlipConnector\Requests\BankAccountInquiry;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Bank Account Inquiry
 */
class BankAccountInquiry extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/v2/disbursement/bank-account-inquiry';
    }

    public function __construct() {}
}
