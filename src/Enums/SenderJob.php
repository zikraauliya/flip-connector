<?php

declare(strict_types=1);

namespace ZikraAuliya\FlipConnector\Enums;

enum SenderJob: string
{
    case housewife = 'housewife';
    case entrepreneur = 'entrepreneur';
    case private_employee = 'private_employee';
    case government_employee = 'government_employee';
    case foundation_board = 'foundation_board';
    case indonesian_migrant_worker = 'indonesian_migrant_worker';
    case others = 'others';
}
