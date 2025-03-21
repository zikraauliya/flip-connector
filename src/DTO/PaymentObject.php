<?php

declare(strict_types=1);

namespace ZikraAuliya\FlipConnector\DTO;

use DateTime;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\Mappers\SnakeCaseMapper;
use ZikraAuliya\FlipConnector\Enums\BankCode;
use ZikraAuliya\FlipConnector\Enums\PaymentObjectStatus;

#[MapName(SnakeCaseMapper::class)]
class PaymentObject extends Data
{
    public function __construct(
        public ?string $id,
        public ?string $linkId,
        public ?string $billLink,
        public ?string $billTitle,
        public ?string $senderName,
        public ?BankCode $senderBank,
        public ?string $senderBankType,
        public ?string $virtualAccountNumber,
        public ?string $amount,
        public ?PaymentObjectStatus $status,
        public ?string $settlementStatus,
        public ?string $referenceId,
        public ?string $paymentUrl,
        public ?DateTime $createdAt,
        public ?DateTime $completedAt,
    ) {}
}
