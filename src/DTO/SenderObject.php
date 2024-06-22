<?php

declare(strict_types=1);

namespace ZikraAuliya\FlipConnector\DTO;

use DateTime;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\Mappers\SnakeCaseMapper;
use ZikraAuliya\FlipConnector\Enums\SenderIdentityType;
use ZikraAuliya\FlipConnector\Enums\SenderJob;

#[MapName(SnakeCaseMapper::class)]
class SenderObject extends Data
{
    public function __construct(
        public ?string $senderName,
        public ?int $placeOfBirth,
        public ?DateTime $dateOfBirth,
        public ?string $address,
        public ?SenderIdentityType $senderIdentityType,
        public ?string $senderIdentityNumber,
        public ?int $senderCountry,
        public ?SenderJob $job,
    ) {}
}
