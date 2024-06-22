<?php

namespace ZikraAuliya\FlipConnector\DTO;

use DateTime;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\Mappers\SnakeCaseMapper;

#[MapName(SnakeCaseMapper::class)]
class DisbursementCallback extends Data
{
    public function __construct(
        public ?int $id,
        public ?int $userId,
        public ?int $amount,
        public ?string $status,
        public ?string $reason,
        public ?DateTime $timestamp,
        public ?string $bankCode,
        public ?string $accountNumber,
        public ?string $recipientName,
        public ?string $senderBank,
        public ?string $remark,
        public ?string $receipt,
        public ?DateTime $timeServed,
        public ?int $bundleId,
        public ?int $companyId,
        public ?int $recipientCity,
        public ?string $createdFrom,
        public ?string $direction,
        public ?string $sender,
        public ?int $fee,
    ) {}
}
