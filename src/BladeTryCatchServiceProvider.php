<?php

namespace Azmolla\BladeTryCatch;

use Illuminate\Support\ServiceProvider;

class BladeTryCatchServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        BladeTryCatchDirective::register();
    }
}
