<?php

declare(strict_types=1);

namespace ZikraAuliya\FlipConnector\DTO;

use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\Mappers\SnakeCaseMapper;
use ZikraAuliya\FlipConnector\Enums\BankAccountInquiryStatus;
use ZikraAuliya\FlipConnector\Enums\BankCode;

#[MapName(SnakeCaseMapper::class)]
class BankAccount extends Data
{
    public function __construct(
        public ?BankCode $bankCode,
        public ?string $accountNumber,
        public ?string $accountHolder,
        public ?BankAccountInquiryStatus $status,
        public ?string $accountType,
    ) {}
}
