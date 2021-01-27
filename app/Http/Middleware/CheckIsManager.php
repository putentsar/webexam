<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
class CheckIsManager
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
		$user=Auth::user();
		if (!$user->isManager())
		{
			$request->session()->flash('status', 'Task was successful!');
			return redirect('/');
		}
        return $next($request);
    }
}
