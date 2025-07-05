<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    // Aquí puedes registrar políticas de acceso y otras cosas
    public function boot()
    {
        $this->registerPolicies();
    }
}
