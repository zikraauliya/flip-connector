<?php

namespace ZikraAuliya\FlipConnector\DTO;

use DateTime;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\Mappers\SnakeCaseMapper;
use Spatie\LaravelData\Optional;
use ZikraAuliya\FlipConnector\Enums\BankCode;
use ZikraAuliya\FlipConnector\Enums\DisbursementCancelledReason;
use ZikraAuliya\FlipConnector\Enums\DisbursementChannel;
use ZikraAuliya\FlipConnector\Enums\DisbursementDirection;
use ZikraAuliya\FlipConnector\Enums\DisbursementTransactionStatus;

#[MapName(SnakeCaseMapper::class)]
class DisbursementObject extends Data
{
    public function __construct(
        public ?int $id,
        public ?int $userId,
        public ?string $amount,
        public ?DisbursementTransactionStatus $status,
        public ?DisbursementCancelledReason $reason,
        public ?DateTime $timestamp,
        public ?BankCode $bankCode,
        public ?string $accountNumber,
        public ?string $recipientName,
        public ?string $senderBank,
        public ?string $remark,
        public ?string $receipt,
        public ?DateTime $timeServed,
        public ?int $bundleId,
        public ?int $companyId,
        public ?int $recipientCity,
        public ?DisbursementChannel $createdFrom,
        public ?DisbursementDirection $direction,
        public ?string $fee,
        public SenderObject|Optional|null $sender = null,
        public string|Optional|null $beneficiaryEmail = null,
        public string|Optional|null $idempotencyKey = null,
    ) {}
}
