<?php

namespace ZikraAuliya\FlipConnector\Enums;

enum SenderBankType: string
{
    case bank_account = 'bank_account';
    case virtual_account = 'virtual_account';
    case wallet_account = 'wallet_account';
    case online_to_offline_account = 'online_to_offline_account';
    case credit_card_account = 'credit_card_account';
}
