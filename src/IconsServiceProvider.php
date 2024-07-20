<?php

namespace SertxuDeveloper\Icons;

use BladeUI\Icons\Exceptions\CannotRegisterIconSet;
use BladeUI\Icons\Factory;
use Illuminate\Contracts\Container\BindingResolutionException;
use Illuminate\Contracts\Container\Container;
use Illuminate\Support\ServiceProvider;

class IconsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                dirname(__DIR__).'/resources/svg' => public_path('vendor/icons'),
            ], 'icons');

            $this->publishes([
                dirname(__DIR__).'/config/icons.php' => $this->app->configPath('icons.php'),
            ], 'icons-config');
        }
    }

    /**
     * Register any application services.
     *
     * @throws CannotRegisterIconSet
     * @throws BindingResolutionException
     */
    public function register(): void
    {
        $this->registerConfig();

        $this->callAfterResolving(Factory::class, function (Factory $factory, Container $container) {
            $config = $container->make('config')->get('icons', []);

            $factory->add('icons', array_merge(['path' => dirname(__DIR__).'/resources/svg'], $config));
        });
    }

    /**
     * Register the package config.
     */
    protected function registerConfig(): void
    {
        $this->mergeConfigFrom(dirname(__DIR__).'/config/icons.php', 'icons');
    }
}
