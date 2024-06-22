<?php

declare(strict_types=1);

namespace ZikraAuliya\FlipConnector\Enums;

enum PaymentObjectSettlementStatus: string
{
    case Cancelled = 'Cancelled';
    case Settled = 'Settled';
    case Pending = 'Pending';
}
