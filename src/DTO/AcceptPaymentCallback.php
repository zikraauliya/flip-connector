<?php

declare(strict_types=1);

namespace ZikraAuliya\FlipConnector\DTO;

use DateTime;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\Mappers\SnakeCaseMapper;
use ZikraAuliya\FlipConnector\Enums\AcceptPaymentCallbackStatus;
use ZikraAuliya\FlipConnector\Enums\BankCode;

#[MapName(SnakeCaseMapper::class)]
class AcceptPaymentCallback extends Data
{
    public function __construct(
        public ?string $id,
        public ?string $billLink,
        public ?int $billLinkId,
        public ?string $billTitle,
        public ?string $senderName,
        public ?BankCode $senderBank,
        public ?string $senderEmail,
        public ?int $amount,
        public ?AcceptPaymentCallbackStatus $status,
        public ?string $senderBankType,
        public ?DateTime $createdAt,
    ) {}
}
