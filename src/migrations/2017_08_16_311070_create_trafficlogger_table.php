<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrafficLoggerTable extends Migration
{
	 public function up()
    {
    	Schema::create(Config::get('trafficlog.table-name'), function(Blueprint $t)
        {
            $t->increments('id')->unsigned();
            $t->text('ipaddress', 100);
            $t->text('username', 100);
            $t->text('impersonator', 100);
            $t->text('url', 2000);
            $t->text('referer', 2000);
            $t->text('user_agent', 2000);
            $t->text('session_id', 100);
            $t->timestamps();
        });
    }

    public function down()
    {
    	Schema::drop(Config::get('trafficlog.table-name'));
    }
}