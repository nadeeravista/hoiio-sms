<?php

namespace Kalahe\HoiioSms;

use Illuminate\Support\ServiceProvider;

class HoiioSmsServiceProvider extends ServiceProvider {

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
     public function boot() {
        //
        include __DIR__ . '/routes.php';
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register() {
        //
    }

}
