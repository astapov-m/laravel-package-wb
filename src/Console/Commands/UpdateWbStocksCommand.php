<?php

namespace Astapovm\Wb\Console\Commands;

use Astapovm\Wb\Library\Executors\ExecutorUpdateWbStocks;
use Illuminate\Console\Command;

class UpdateWbStocksCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:updateWbStocks';

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
        ExecutorUpdateWbStocks::run();
        return 0;
    }
}
