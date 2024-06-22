<?php

declare(strict_types=1);

namespace ZikraAuliya\FlipConnector\Enums;

enum BankAccountInquiryStatus: string
{
    case PENDING = 'PENDING';
    case SUCCESS = 'SUCCESS';
    case INVALID_ACCOUNT_NUMBER = 'INVALID_ACCOUNT_NUMBER';
    case SUSPECTED_ACCOUNT = 'SUSPECTED_ACCOUNT';
    case BLACK_LISTED = 'BLACK_LISTED';
    case FAILED = 'FAILED';
    case CLOSED = 'CLOSED';

    public function description(): ?string
    {
        return match ($this->value) {
            'PENDING' => 'Inquiry still in process',
            'SUCCESS' => 'Inquiry process is complete and bank account number is valid',
            'INVALID_ACCOUNT_NUMBER' => 'Inquiry process is complete but the account number is invalid or maybe a virtual account number',
            'SUSPECTED_ACCOUNT' => 'Bank account have been suspected on doing fraud. You still can do a disbursement to this account.',
            'BLACK_LISTED' => 'Bank account have been confirmed on doing a fraud and therefore is blacklisted. You can\'t do a disbursment to this account.',
            'FAILED' => 'The inquiry process is failed before we get the final status of the inquiry, e.g due to timeout or any other errors from the bank. If you get this response, please retry the inquiry to trigger reverification of the account.',
            'CLOSED' => 'The inquiry process is complete and the account is valid, but it is closed/inactive so that it cannot receive money. You cannot do a disbursement to this account.',
        };
    }
}
