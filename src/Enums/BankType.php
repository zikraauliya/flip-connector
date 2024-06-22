<?php

declare(strict_types=1);

namespace ZikraAuliya\FlipConnector\Enums;

enum BankType: string
{
    case bank_account = 'bank_account';
    case virtual_account = 'virtual_account';
    case wallet_account = 'wallet_account';
    case online_to_offline_account = 'online_to_offline_account';
    case credit_card_account = 'credit_card_account';

    public function description(): ?string
    {
        return match ($this->value) {
            'bank_account' => 'if the type of the sender bank uses bank transfer.',
            'virtual_account' => 'if the type of the sender bank uses a virtual account.',
            'wallet_account' => 'if the type of the sender bank uses e-wallet.',
            'online_to_offline_account' => 'if the type of the sender bank uses retail.',
            'credit_card_account' => 'if the type of the sender bank uses credit card.',
        };
    }
}
