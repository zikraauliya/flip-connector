<?php

declare(strict_types=1);

namespace ZikraAuliya\FlipConnector\Enums;

enum DisbursementCancelledReason: string
{
    case INACTIVE_ACCOUNT = 'INACTIVE_ACCOUNT';
    case NOT_REGISTERED_ACCOUNT = 'NOT_REGISTERED_ACCOUNT';
    case CANT_RECEIVE_TRANSFER = 'CANT_RECEIVE_TRANSFER';
    case INTERMITTENT_DISTURBANCE_ON_BENEFICIARY_BANK = 'INTERMITTENT_DISTURBANCE_ON_BENEFICIARY_BANK';
    case BENEFICIARY_ACCOUNT_NOT_VERIFIED = 'BENEFICIARY_ACCOUNT_NOT_VERIFIED';
    case INSUFFICIENT_BALANCE = 'INSUFFICIENT_BALANCE';
    case EXCEEDED_TRANSACTION_AMOUNT_LIMIT = 'EXCEEDED_TRANSACTION_AMOUNT_LIMIT';

    public function description(): ?string
    {
        return match ($this->value) {
            'INACTIVE_ACCOUNT' => 'Inactive account / Nomor rekening tidak aktif',
            'NOT_REGISTERED_ACCOUNT' => 'Not registered account / Nomor rekening tidak terdaftar',
            'CANT_RECEIVE_TRANSFER' => 'Can\'t receive transfer / Rekening tujuan tidak dapat menerima transfer',
            'INTERMITTENT_DISTURBANCE_ON_BENEFICIARY_BANK' => 'Intermittent disturbance on destination bank / Bank tujuan sementara mengalami gangguan',
            'BENEFICIARY_ACCOUNT_NOT_VERIFIED' => 'Account is not verified / Rekening tujuan belum terverifikasi',
            'INSUFFICIENT_BALANCE' => 'Insufficient deposit balance / Deposit tidak cukup',
            'EXCEEDED_TRANSACTION_AMOUNT_LIMIT' => 'Exceeded amount transaction limit / Batas transaksi melebihi jumlah',
        };
    }
}
