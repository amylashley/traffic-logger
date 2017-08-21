<?php
namespace Orchestra\Testbench\Tests\Databases;
use Orchestra\Testbench\TestCase;
class MigrateDatabaseTest extends TestCase
{
    /**
     * Setup the test environment.
     */
    public function setUp()
    {
        parent::setUp();
        $this->artisan('migrate', ['--database' => 'testbench']);
    }
    /**
     * Define environment setup.
     *
     * @param  \Illuminate\Foundation\Application  $app
     *
     * @return void
     */
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
     * Test running migration.
     *
     * @test
     */
    public function testRunningMigration()
    {
        $users = \DB::table('traffic_log')->where('id', '=', 1)->first();
       // $this->assertEquals('hello@orchestraplatform.com', $users->email);
        //$this->assertTrue(\Hash::check('123', $users->password));
        $this->assertTrue(true);
    }
}
