<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Datas;
use App\Models\Observer;

class Data extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:data';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     * use App\Models\Data;
     */
    public function handle(Data $data)
    {
        $data = Datas::create([
                'user_name' => 'Demo User',
                'user_email' => 'Demo User',
                'user_contact' => 'Demo User',
                'overview' => 'Demo User',
                'role' => 'Demo User'
            ]);
    }
}
