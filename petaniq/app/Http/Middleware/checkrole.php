<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class checkrole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, $category)
    {
        $user = $request->user();
        $userCategory = User::find($user->id)->kategori;

        if($userCategory != $category){
            return response()->view('errors.403 ');
        }

        return $next($request);
    }
}
