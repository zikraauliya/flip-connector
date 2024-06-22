<?php

namespace ZikraAuliya\FlipConnector\DTO;

use DateTime;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\Mappers\SnakeCaseMapper;
use ZikraAuliya\FlipConnector\Enums\AcceptPaymentCallbackStatus;

#[MapName(SnakeCaseMapper::class)]
class AcceptPaymentCallback extends Data
{
    public function __construct(
        public ?string $id,
        public ?string $billLink,
        public ?int $billLinkId,
        public ?string $billTitle,
        public ?string $senderName,
        public ?string $senderBank,
        public ?string $senderEmail,
        public ?int $amount,
        public ?AcceptPaymentCallbackStatus $status,
        public ?string $senderBankType,
        public ?DateTime $createdAt,
    ) {}
}
