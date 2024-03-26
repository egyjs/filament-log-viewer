<?php

namespace Egyjs\FilamentLogViewer\Commands;

use Illuminate\Console\Command;

class FilamentLogViewerCommand extends Command
{
    public $signature = 'filament-log-viewer';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
