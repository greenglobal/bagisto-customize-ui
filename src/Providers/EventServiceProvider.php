<?php

namespace GGPHP\UI\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Event::listen(['bagisto.admin.layout.body.after'], function($viewRenderEventManager) {
            $viewRenderEventManager->addTemplate('ggphp-ui::admin.layouts.script');
        });
    }
}
