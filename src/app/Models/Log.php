<?php // src/app/Models/Log.php

namespace AmyLashley\TrafficLogger\App\Models;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
	protected $table;
	
	public function __construct() {
		parent::__construct();
		$this->table = config('trafficlog.table-name');
		
	}
}