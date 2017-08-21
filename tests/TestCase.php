<?php

class TestCase extends Orchestra\Testbench\TestCase
{
	protected function getPackageProviders($app)
	{
		return ['AmyLashley\TrafficLogger\App\Providers\TrafficLoggerServiceProvider'];
	}
	
	protected function getPackageAliases($app)
	{
		return [
				'TrafficLogger' => 'AmyLashley\TrafficLogger\App\Facades\TrafficLoggerFacade'
		];
	}
	
	/**
	 * Setup the test environment.
	 */
	public function setUp()
	{
		parent::setUp();
		
		$this->loadLaravelMigrations();
	}
	
	protected function getEnvironmentSetUp($app)
	{
		// Setup default database to use sqlite :memory:
		$app['config']->set('database.default', 'testbench');
		$app['config']->set('database.connections.testbench', [
				'driver'   => 'sqlite',
				'database' => ':memory:',
				'prefix'   => '',
		]);
	}
}

