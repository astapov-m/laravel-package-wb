<?php

namespace Astapovm\Wb\Console\Commands;

use Astapovm\Wb\Library\Executors\ExecutorUpdateWbSales;
use Illuminate\Console\Command;

class UpdateWbSalesCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:updateWbSales';

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
        ExecutorUpdateWbSales::run();
        return 0;
    }
}
