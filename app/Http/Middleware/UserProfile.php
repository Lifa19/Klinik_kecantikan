<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserProfile
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if ((empty(Auth::user()->Customer->name) || empty(Auth::user()->Customer->address) || empty(Auth::user()->Customer->gender) || empty(Auth::user()->Customer->phone) || empty(Auth::user()->Customer->dateOfBirth)) && !Auth::user()->hasRole('admin')) {
            return redirect()->route('userHome');
        }

        return $next($request);
    }
}
