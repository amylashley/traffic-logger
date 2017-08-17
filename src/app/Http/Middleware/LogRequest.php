<?php

namespace AmyLashley\TrafficLogger\App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Log;
use AmyLashley;
use AmyLashley\TrafficLogger\App\Models\Traffic;

class LogRequest
{
	
    public function handle($request, Closure $next)
    {
    	$data = ['ipaddress' => $request->getClientIp(),
    				'username' => '',
    				'impersonator' => '',
    				'url' => $request->fullUrl(),
    				'referer' => $request->headers->get('referer'),
    				'user_agent' => $request->header('User-Agent'),
    				'session_id' => ''];
    	$traffic = new Traffic;
    	$traffic->fill($data);
    	$traffic->save();
    	
       return $next($request);
    }
}