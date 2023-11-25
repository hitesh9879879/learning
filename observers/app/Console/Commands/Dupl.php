<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Jobs\SyncData;

class Dupl extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:dupl';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */

    public function handle()
    {
        dispatch(new SyncData());
        $this->info('Data sync success');
    }
}
