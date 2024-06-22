<?php

declare(strict_types=1);

namespace ZikraAuliya\FlipConnector\Enums;

enum SenderIdentityType: string
{
    case nat_id = 'nat_id';
    case drv_lic = 'drv_lic';
    case passport = 'passport';
    case bank_acc = 'bank_acc';
}
