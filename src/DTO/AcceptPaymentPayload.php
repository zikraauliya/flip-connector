<?php

declare(strict_types=1);

namespace ZikraAuliya\FlipConnector\DTO;

use DateTime;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Attributes\WithTransformer;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\Mappers\SnakeCaseMapper;
use Spatie\LaravelData\Optional;
use ZikraAuliya\FlipConnector\Casts\BooleanTransformer;
use ZikraAuliya\FlipConnector\Enums\BankCode;
use ZikraAuliya\FlipConnector\Enums\BankType;
use ZikraAuliya\FlipConnector\Enums\BillStep;
use ZikraAuliya\FlipConnector\Enums\BillType;

#[MapName(SnakeCaseMapper::class)]
class AcceptPaymentPayload extends Data
{
    public function __construct(
        public ?string $title,
        public ?BillType $type,
        public int|Optional|null $amount = null,
        public ?DateTime $expiredDate = null,
        public string|Optional|null $redirectUrl = null,
        #[WithTransformer(BooleanTransformer::class)]
        public bool $isAddressRequired = false,
        #[WithTransformer(BooleanTransformer::class)]
        public bool $isPhoneNumberRequired = false,
        public BillStep|Optional $step = BillStep::InputData,
        public string|Optional|null $senderName = null,
        public string|Optional|null $senderEmail = null,
        public string|Optional|null $senderPhoneNumber = null,
        public string|Optional|null $senderAddress = null,
        public BankCode|Optional|null $senderBank = null,
        public BankType|Optional|null $senderBankType = null,
    ) {}
}
