<?php

namespace AmyLashley\TrafficLogger\App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use AmyLashley\TrafficLogger\App\Models\Traffic;

class LogRequest
{
	public function handle($request, Closure $next)
	{
		$response = $next($request);
		$username = '';
		if (Auth::user()){
			$username = Auth::user()->username;
		}
		$data = ['ipaddress' => $request->getClientIp(),
				'username' => $username,
				'impersonator' => $request->session()->get(config('trafficlog.impersonator')),
				'url' => $request->fullUrl(),
				'referer' => $request->headers->get('referer'),
				'user_agent' => $request->header('User-Agent'),
				'session_id' => ''];
		$traffic = new Traffic;
		$traffic->fill($data);
		$traffic->save();
		
		return $response;
	}
}