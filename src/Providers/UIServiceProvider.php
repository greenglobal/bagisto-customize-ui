<?php

namespace GGPHP\UI\Providers;

use Illuminate\Support\ServiceProvider;

class UIServiceProvider extends ServiceProvider {

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../../publishable/assets' => public_path('vendor/ggphp/ui/assets'),
        ], 'public');

        $this->loadViewsFrom(__DIR__ . '/../Resources/views', 'ggphp-ui');

        $this->app->register(EventServiceProvider::class);
    }
}
