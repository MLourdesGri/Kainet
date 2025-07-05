<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    protected $listen = [
        // Aquí van tus eventos y listeners
    ];

    public function boot()
    {
        parent::boot();
    }
}
