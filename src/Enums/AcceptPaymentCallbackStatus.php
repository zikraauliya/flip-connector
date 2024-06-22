<?php

namespace ZikraAuliya\FlipConnector\Enums;

enum AcceptPaymentCallbackStatus: string
{
    case SUCCESSFUL = 'SUCCESSFUL';
    case CANCELLED = 'CANCELLED';
    case FAILED = 'FAILED';
}
