<?php

declare(strict_types=1);

namespace ZikraAuliya\FlipConnector\DTO;

use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\Mappers\SnakeCaseMapper;
use ZikraAuliya\FlipConnector\Enums\BillActivationStatus;
use ZikraAuliya\FlipConnector\Enums\BillStep;
use ZikraAuliya\FlipConnector\Enums\BillType;

#[MapName(SnakeCaseMapper::class)]
class BillObject extends Data
{
    public function __construct(
        public ?string $linkId,
        public ?string $linkUrl,
        public ?string $title,
        public ?BillType $type,
        public ?string $amount,
        public ?string $redirectUrl,
        public ?string $expiredDate,
        public ?string $createdFrom,
        public ?BillActivationStatus $status,
        public ?bool $isAddressRequired,
        public ?bool $isPhoneNumberRequired,
        public ?BillStep $step,
        public ?CustomerObject $customer,
        public ?BillPaymentObject $billPayment,
        public ?string $paymentUrl,
    ) {}
}
