<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Translation\Translator;

class TranslatorServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->loadTranslationsFrom('LANG PATH', 'YOUR NAMESPACE');

        $this->app->extend('translator', function ($service, $app) {
            $trans = new Translator($app['translation.loader'], $app['config']['app.locale']);
            $trans->setFallback($app['config']['app.fallback_locale']);
            return $trans;
        });
    }
}
