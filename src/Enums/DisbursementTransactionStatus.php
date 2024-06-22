<?php

declare(strict_types=1);

namespace ZikraAuliya\FlipConnector\Enums;

enum DisbursementTransactionStatus: string
{
    case PENDING = 'PENDING';
    case CANCELLED = 'CANCELLED';
    case DONE = 'DONE';

    public function description(): ?string
    {
        return match ($this->value) {
            'PENDING' => 'Disbursement is still in process',
            'CANCELLED' => 'The transaction is cancelled and the amount of the transaction plus the transaction fee will be credited to your balance. This will happen if the transfer process are failed for reason such as inactive recipient account, wrong account number, etc',
            'DONE' => 'Disbursement process is finished and the money have been sent to the recipient',
        };
    }
}
