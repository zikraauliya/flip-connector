<?php

namespace ZikraAuliya\FlipConnector\Enums;

enum BillPaymentTransactionStatus: string
{
    case NOT_CONFIRMED = 'NOT_CONFIRMED';
    case PENDING = 'PENDING';
    case PROCESSED = 'PROCESSED';
    case CANCELLED = 'CANCELLED';
    case FAILED = 'FAILED';
    case DONE = 'DONE';

    public function description(): ?string
    {
        return match ($this->value) {
            'NOT_CONFIRMED' => 'If the transaction was just created.',
            'PENDING' => 'If the transaction has been confirmed by the user',
            'PROCESSED' => ' If the transaction is being processed by the system.',
            'CANCELLED' => 'If the transaction is cancelled.',
            'FAILED' => 'If the transaction is failed.',
            'DONE' => 'If the transaction is successfully done.',
        };
    }
}
