<?php

declare(strict_types=1);

namespace ZikraAuliya\FlipConnector\Enums;

enum BillStep: int
{
    case InputData = 1;
    case PaymentMethod = 2;
    case PaymentConfirmation = 3;
}
