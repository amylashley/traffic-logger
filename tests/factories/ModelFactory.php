<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
| AEL: Any seed data that is static will be defined directly in the 
|      Seeder file for the class. Any user-generated data will be
|	   defined here by faker
|
*/
/** @var \Illuminate\Database\Eloquent\Factory $factory */
$faker = Faker\Factory::create('en_US');

$factory->define(\AmyLashley\TrafficLogger\App\Models\Traffic::class, function (Faker\Generator $faker){
	return [
			'username' => 'alashley',
			'ipaddress' => '127.0.0.1',
			'impersonator' => '',
			'url' => '/',
			'referer' => '',
			'user_agent' => '',
			'session_id' => ''
					];
});


/*$factory->define(AmyLashley\TrafficLogger\App\Models\Traffic::class, function (Faker\Generator $faker){
	return [
			'username' => function(){
				return factory(App\Models\User::class)->create()->username;
			},
			'ipaddress' => '127.0.0.1',
			'impersonator' => '',
			'url' => '/',
			'referer' => '',
			'user_agent' => '',
			'session_id' => ''
					];
});*/

$factory->define(App\Models\User::class, function(Faker\Generator $faker){
	static $username;
	
	return [
			'full_name' => $faker->name,
			'email' => $faker->unique()->safeEmail,
			'username' => $username ?: $username = $faker->userName,
			'hash' => str_random(10),
	];
});