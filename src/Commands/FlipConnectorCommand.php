<?php

declare(strict_types=1);

namespace ZikraAuliya\FlipConnector\Commands;

use Illuminate\Console\Command;

class FlipConnectorCommand extends Command
{
    public $signature = 'flip-connector';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
