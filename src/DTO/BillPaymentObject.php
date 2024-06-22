<?php

declare(strict_types=1);

namespace ZikraAuliya\FlipConnector\DTO;

use DateTime;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\Mappers\SnakeCaseMapper;
use ZikraAuliya\FlipConnector\Enums\BankCode;
use ZikraAuliya\FlipConnector\Enums\BankType;
use ZikraAuliya\FlipConnector\Enums\BillPaymentTransactionStatus;

#[MapName(SnakeCaseMapper::class)]
class BillPaymentObject extends Data
{
    public function __construct(
        public ?string $id,
        public ?int $amount,
        public ?int $uniqueCode,
        public ?BillPaymentTransactionStatus $status,
        public ?BankCode $senderBank,
        public ?BankType $senderBankType,
        public ?BankAccount $receiverBankAccount,
        public ?string $userAddress,
        public ?string $userPhone,
        public ?DateTime $createdAt,
    ) {}
}
