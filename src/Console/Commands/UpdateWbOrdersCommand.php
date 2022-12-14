<?php

namespace Astapovm\Wb\Console\Commands;

use Astapovm\Wb\Library\Executors\ExecutorUpdateWbOrders;
use Illuminate\Console\Command;

class UpdateWbOrdersCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:updateWbOrders';

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
        ExecutorUpdateWbOrders::run();
        return 0;
    }
}
