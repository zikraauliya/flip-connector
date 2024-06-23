<?php

declare(strict_types=1);

namespace ZikraAuliya\FlipConnector\DTO;

use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Attributes\WithTransformer;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\Mappers\SnakeCaseMapper;
use Spatie\LaravelData\Optional;
use ZikraAuliya\FlipConnector\Casts\ImplodeTransformer;
use ZikraAuliya\FlipConnector\Enums\BankCode;

#[MapName(SnakeCaseMapper::class)]
class DisbursementPayload extends Data
{
    public function __construct(
        public string $accountNumber,
        public BankCode $bankCode,
        public int $amount,
        public Optional|string|null $remark = null,
        public Optional|int|null $recipientCity = null,
        #[WithTransformer(ImplodeTransformer::class)]
        public Optional|string|null $beneficieryEmail = null,
    ) {}
}
