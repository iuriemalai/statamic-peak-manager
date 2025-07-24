<?php

namespace IurieMalai\StatamicPeakManager\App\Console\Commands;

use Illuminate\Console\Command;
use Statamic\Console\RunsInPlease;

class StatamicPeakManagerCommand extends Command
{
    use RunsInPlease;

    public $signature = 'statamic:statamic-peak-manager';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
