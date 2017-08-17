<?php

namespace AmyLashley\TrafficLogger\App\Providers;

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
    	
    	$this->loadRoutesFrom(__DIR__.'/../../routes/web.php');
    	
    	$this->publishes([
    				__DIR__ . '/../../config/config.php' => config_path('trafficlog.php'),
    		]);
    	
    	$this->publishes([
    			__DIR__ . '/../../migrations' => $this->app->databasePath() . '/migrations'
    	], 'migrations');
    }
    
    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {

    }
    
}