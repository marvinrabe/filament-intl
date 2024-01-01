<?php

namespace MarvinRabe\FilamentIntl\Commands;

use Illuminate\Console\Command;

class FilamentIntlCommand extends Command
{
    public $signature = 'filament-intl';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
