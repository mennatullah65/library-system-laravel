<?php

namespace App\Http\Middleware;

use Closure;

class librarian_check
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
        //dd('it work');
        if(! $request->session()->get('email')){
            //echo '<script>alert("you should log in as librarian to add books");</script>';
            return redirect('/');
        }
        return $next($request);
    }
}
