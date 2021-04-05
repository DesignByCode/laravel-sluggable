<?php

namespace Designbycode\Sluggable\Commands;

use Illuminate\Console\Command;

class SluggableCommand extends Command
{
    public $signature = 'laravel-sluggable';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
