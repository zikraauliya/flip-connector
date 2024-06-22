<?php

namespace ZikraAuliya\FlipConnector\Enums;

enum BillStep: int
{
    case InputData = 1;
    case PaymentMethod = 2;
    case PaymentConfirmation = 3;
}
