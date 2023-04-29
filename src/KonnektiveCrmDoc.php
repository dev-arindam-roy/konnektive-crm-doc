<?php

namespace Konnektive\CrmDoc;

use Illuminate\Support\ServiceProvider;

class KonnektiveCrmDoc extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        
    }

    /**
     * Bootstrap services.
     * Arindam Roy
     */
    public function boot(): void
    {
        $this->loadRoutesFrom(__DIR__ . '/web.php');
    }
}