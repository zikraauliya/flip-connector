<?php

namespace ZikraAuliya\FlipConnector\DTO;

use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\Mappers\SnakeCaseMapper;

#[MapName(SnakeCaseMapper::class)]
class CustomerObject extends Data
{
    public function __construct(
        public ?string $name,
        public ?string $email,
        public ?string $phone,
        public ?string $address,
    ) {}
}
