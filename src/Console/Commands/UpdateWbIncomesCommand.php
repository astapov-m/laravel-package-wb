<?php

namespace Astapovm\Wb\Console\Commands;

use Astapovm\Wb\Library\Executors\ExecutorUpdateWbIncomes;
use Illuminate\Console\Command;

class UpdateWbIncomesCommand extends Command
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
        ExecutorUpdateWbIncomes::run();
        return 0;
    }
}
