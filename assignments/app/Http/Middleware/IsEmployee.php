<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsEmployee
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (Session('userrole') != "Employee") {
            return redirect()->back()->with('errormsg', 'You are not authorized to view this page');
        }
        return $next($request);
    }
}
