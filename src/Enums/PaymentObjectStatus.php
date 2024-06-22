<?php

namespace ZikraAuliya\FlipConnector\Enums;

enum PaymentObjectStatus: string
{
    case FAILED = 'FAILED';
    case SUCCESSFUL = 'SUCCESSFUL';
    case PENDING = 'PENDING';
}
