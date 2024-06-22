<?php

declare(strict_types=1);

namespace ZikraAuliya\FlipConnector\Enums;

enum DisbursementDirection: string
{
    case DOMESTIC_TRANSFER = 'DOMESTIC_TRANSFER';
    case DOMESTIC_SPECIAL_TRANSFER = 'DOMESTIC_SPECIAL_TRANSFER';
    case FOREIGN_INBOUND_SPECIAL_TRANSFER = 'FOREIGN_INBOUND_SPECIAL_TRANSFER';

    public function description(): ?string
    {
        return match ($this->value) {
            'DOMESTIC_TRANSFER' => 'Common Disbursement from Indonesia to Indonesian recipient',
            'DOMESTIC_SPECIAL_TRANSFER' => 'Special disbursement from the user of a Money Transfer Company residing in Indonesia to Indonesian recipient',
            'FOREIGN_INBOUND_SPECIAL_TRANSFER' => 'Special disbursement from the user of a Money Transfer Company residing in a foreign country to Indonesian recipient',
        };
    }
}
