<?php

namespace App\Observers;

use App\Models\Data;
use App\Models\Observer;

class DataObserver
{
    /**
     * Handle the Data "created" event.
     */
    public function created(Data $data): void
    {
        Observer::create([
            'user_name' => $data->user_name,
            'user_email' => $data->user_email,
            'user_contact' => $data->user_contact,
            'overview' => $data->overview,
            'role' => $data->role
        ]);
    }

    /**
     * Handle the Data "updated" event.
     */
    public function updated(Data $data): void
    {
        //
    }

    /**
     * Handle the Data "deleted" event.
     */
    public function deleted(Data $data): void
    {
        //
    }

    /**
     * Handle the Data "restored" event.
     */
    public function restored(Data $data): void
    {
        //
    }

    /**
     * Handle the Data "force deleted" event.
     */
    public function forceDeleted(Data $data): void
    {
        //
    }
}
