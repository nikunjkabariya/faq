<?php

namespace Nikunjkabariya\Faq;

use Illuminate\Support\ServiceProvider;
//use Illuminate\Support\Facades\App;
//use Illuminate\Contracts\Routing\Registrar as Router;
use Illuminate\Support\Facades\Route;

//use Illuminate\Foundation\Support\Providers\RouteServiceProvider;

class FaqServiceProvider extends ServiceProvider {

    /**
     * This will be used to register config & view
     *
     * @var  string
     */
    protected $packageName = 'faq';

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot() {
        // Load routes
        //$this->loadRoutesFrom(__DIR__ . '/../../routes/routes.php');
        
        // Regiter migrations
        $this->loadMigrationsFrom(__DIR__ . '/../../database/migrations');

        // Publish your config
        $this->publishes([__DIR__ . '/../../config/config.php' => config_path($this->packageName . '.php'),], 'config');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register() {

        $this->mergeConfigFrom(
                __DIR__ . '/../../config/config.php', $this->packageName
        );

        // $this->app->make('Nikunjkabariya\Faq\FaqController');
        
        // Load routes
        Route::group(['namespace' => '\Nikunjkabariya\Faq'], function ($router) {
            require __DIR__ . '/../../routes/routes.php';
        });
    }

    /**
     * Load the standard routes file for the application.
     *
     * @param  string  $path
     * @return mixed
     */
    /* protected function loadRoutesFrom() {
      Route::group([
      'middleware' => 'api',
      'namespace' => $this->namespace,
      'prefix' => 'api',
      ], function ($router) {
      require __DIR__ . '/routes.php';
      });
      } */
}
