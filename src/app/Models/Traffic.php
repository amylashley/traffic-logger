<?php 

namespace AmyLashley\TrafficLogger\App\Models;

use Eloquent;
use Config;
use Exception;

class Traffic extends Eloquent {
	
	protected $table;
	
	protected $fillable;
	
	public function __construct() {
		parent::__construct();
		$this->table = config('trafficlog.table-name');
		$this->fillable = array('ipaddress', 'username', 'impersonator', 'url', 'referer', 'user_agent', 'session_id');
		
	}
	
	/**
	 * 
	 * @param array $data
	 * @return unknown
	 */
	public function logTraffic(array $data){
		$traffic = new Traffic;
		$traffice->fill($data);
		return $traffic->save();
	}
	
	/**
	 * Is there a logged in user? If so, get their info. 
	 * TODO: I think AmherstAuth may need to be a package as well in 
	 * order to do this. It must be able to be included as a 
	 * dependency in composer.json for this package. 
	 * 
	 * @return object
	 */
	/*public function user(){
		return $this->belongsTo($this->get)
	}
	*/
}