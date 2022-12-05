<?php

namespace Astapovm\Wb\Console\Commands;

use Astapovm\Wb\Library\Executors\ExecutorStart;
use Illuminate\Console\Command;

class StartCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:name';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        ExecutorStart::run();
        return 0;
    }
}
