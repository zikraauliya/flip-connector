<?php

declare(strict_types=1);

namespace ZikraAuliya\FlipConnector\DTO;

use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Mappers\SnakeCaseMapper;
use Spatie\LaravelData\Optional;
use ZikraAuliya\FlipConnector\Enums\BankAccountInquiryStatus;
use ZikraAuliya\FlipConnector\Enums\BankCode;
use ZikraAuliya\FlipConnector\Enums\BankType;

#[MapName(SnakeCaseMapper::class)]
class BankInquiry extends BankAccount
{
    public function __construct(
        public ?BankCode $bankCode,
        public ?string $accountNumber,
        public ?string $accountHolder,
        public ?BankAccountInquiryStatus $status,
        public ?string $accountType = null,
        public string|Optional|null $inquiryKey = null,
    ) {
        parent::__construct(
            bankCode: $bankCode,
            accountNumber: $accountNumber,
            accountHolder: $accountHolder,
            status: $status,
            accountType: $accountType,
        );
    }
}
