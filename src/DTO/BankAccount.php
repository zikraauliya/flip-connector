<?php

namespace ZikraAuliya\FlipConnector\DTO;

use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\Mappers\SnakeCaseMapper;
use Spatie\LaravelData\Optional;
use ZikraAuliya\FlipConnector\Enums\BankAccountInquiryStatus;
use ZikraAuliya\FlipConnector\Enums\BankCode;
use ZikraAuliya\FlipConnector\Enums\BankType;

#[MapName(SnakeCaseMapper::class)]
class BankAccount extends Data
{
    public function __construct(
        public ?BankCode $bankCode,
        public ?string $accountNumber,
        public ?string $accountHolder,
        public ?BankAccountInquiryStatus $status,
        public BankType|Optional|null $accountType,
    ) {}
}
