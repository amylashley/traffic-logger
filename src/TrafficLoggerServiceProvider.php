<?php

namespace AmyLashley\TrafficLogger;

use Illuminate\Support\ServiceProvider;

class TrafficLoggerServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
    	// use this if your package has views
    	//$this->loadViewsFrom(realpath(__DIR__.'/resources/views'), 'skeleton');
    	
    	// use this if your package has lang files
    	//$this->loadTranslationsFrom(__DIR__.'/resources/lang', 'skeleton');
    	
    	// use this if your package has routes
    	//$this->setupRoutes($this->app->router);
    	
    	$this->publishes([
    				__DIR__ . '/config/config.php' => config_path('trafficlog.php'),
    		]);
    	
    }

    /**
     * Define the routes for the application.
     *
     * @param  \Illuminate\Routing\Router  $router
     * @return void
     */
    public function setupRoutes(Router $router)
    {
    	/*$router->group(['namespace' => 'League\Skeleton\Http\Controllers'], function($router)
    	{
    		require __DIR__.'/Http/routes.php';
    	});
    	*/
    }
    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
    	$this->registerSkeleton();
    	
    	// use this if your package has a config file
    	 config([
    	         'config/skeleton.php',
    			 ]);
    }
    private function registerSkeleton()
    {
    	$this->app->bind('skeleton',function($app){
    		return new Skeleton($app);
    	});
    }
}