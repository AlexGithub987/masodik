<?php

namespace Alex\Masodik\Commands;

use Illuminate\Console\Command;

class MasodikCommand extends Command
{
    public $signature = 'masodik';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
