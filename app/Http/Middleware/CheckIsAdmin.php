<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckIsAdmin
{
  
    public function handle($request, Closure $next)
    {
		$user=Auth::user();
		if (!$user->isAdmin())
		{
                     session()->put('message', 'У вас нет прав администратора!');
			return redirect('/');
		}
        return $next($request);
    }
}
