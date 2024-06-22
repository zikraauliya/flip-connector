<?php

namespace ZikraAuliya\FlipConnector\Enums;

enum PaymentObjectSettlementStatus: string
{
    case Cancelled = 'Cancelled';
    case Settled = 'Settled';
    case Pending = 'Pending';
}
