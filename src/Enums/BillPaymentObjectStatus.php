<?php

declare(strict_types=1);

namespace ZikraAuliya\FlipConnector\Enums;

enum BillPaymentObjectStatus: string
{
    case NOT_CONFIRMED = 'NOT_CONFIRMED';
    case PENDING = 'PENDING';
    case PROCESSED = 'PROCESSED';
    case CANCELLED = 'CANCELLED';
    case FAILED = 'FAILED';
    case DONE = 'DONE';
}
