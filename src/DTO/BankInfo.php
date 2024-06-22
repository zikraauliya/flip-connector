<?php

namespace ZikraAuliya\FlipConnector\DTO;

use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\Mappers\SnakeCaseMapper;
use ZikraAuliya\FlipConnector\Enums\BankInfoStatus;

#[MapName(SnakeCaseMapper::class)]
class BankInfo extends Data
{
    public function __construct(
        public ?string $bankCode,
        public ?string $name,
        public ?int $fee,
        public ?int $queue,
        public ?BankInfoStatus $status,
    ) {}
}
