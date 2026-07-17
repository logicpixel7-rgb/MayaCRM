<?php

namespace Maya\Installer\Providers;

use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\ServiceProvider;
use Maya\Installer\Console\Commands\Installer as InstallerCommand;
use Maya\Installer\Http\Middleware\CanInstall;
use Maya\Installer\Http\Middleware\Locale;

class InstallerServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     */
    protected bool $defer = false;

    /**
     * Bootstrap the application events.
     */
    public function boot(Router $router): void
    {
        $router->middlewareGroup('install', [CanInstall::class]);

        $this->loadTranslationsFrom(__DIR__.'/../Resources/lang', 'installer');

        $this->loadRoutesFrom(__DIR__.'/../Routes/web.php');

        $this->loadMigrationsFrom(__DIR__.'/../Database/Migrations');

        $this->loadTranslationsFrom(__DIR__.'/../Resources/lang', 'installer');

        $this->loadViewsFrom(__DIR__.'/../Resources/views', 'installer');

        $router->aliasMiddleware('installer_locale', Locale::class);

        Event::listen('maya.installed', 'Maya\Installer\Listeners\Installer@installed');

        $this->loadTranslationsFrom(__DIR__.'/../Resources/lang', 'installer');

        /**
         * Route to access template applied image file
         */
        $this->app['router']->get('cache/{filename}', [
            'uses' => 'Maya\Installer\Http\Controllers\ImageCacheController@getImage',
            'as' => 'image_cache',
        ])->where(['filename' => '[ \w\\.\\/\\-\\@\(\)\=]+']);
    }

    /**
     * Register the service provider.
     */
    public function register(): void
    {
        if (! $this->app->runningInConsole()) {
            return;
        }

        $this->commands([InstallerCommand::class]);
    }
}
