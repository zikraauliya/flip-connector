<?php

namespace ZikraAuliya\FlipConnector\Enums;

enum BankInfoStatus: string
{
    case OPERATIONAL = 'OPERATIONAL';
    case DISTURBED = 'DISTURBED';
    case HEAVILY_DISTURBED = 'HEAVILY_DISTURBED';

    public function description(): ?string
    {
        return match ($this->value) {
            'OPERATIONAL' => 'Banks are operational, disbursement will be processed as soon as possible',
            'DISTURBED' => 'Banks are slow or have another problem. Disbursement will still be processed, but in slower pace and might be delayed',
            'HEAVILY_DISTURBED' => 'Banks are having an error, offline, or another problem that result in a nearly unusable system. Disbursement to this bank can not be processed in a short time, and maybe won’t be processed in the same day. You can ask for a refund if this happen.',
        };
    }
}
