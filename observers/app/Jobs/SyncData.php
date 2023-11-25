<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Models\Datas;
use App\Models\Data;

class SyncData implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $user = Data::get();
        foreach($user as $value) {
            Datas::updateOrCreate([
                'user_email' => $value->user_email,
            ], [
                'user_name' => $value->user_name,
                'user_contact' => $value->user_contact,
                'overview' => $value->overview
            ]);
        }
    }
}
