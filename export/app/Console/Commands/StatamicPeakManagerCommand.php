<?php

namespace IurieMalai\StatamicPeakManager\App\Console\Commands;

use Illuminate\Console\Command;

class StatamicPeakManagerCommand extends Command
{
    public $signature = 'statamic-peak-manager';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
