<?php

namespace App\Http\Middleware;

use Closure;
use App\Config;


class SetLocale
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
        $langs = ['es', 'en'];
        $main_lang = 'es';

        if (empty($request->segment(1))) {
            app()->setLocale($main_lang);
        } elseif (in_array($request->segment(1), $langs)) {
            if ($request->segment(1) == $main_lang) {
                return redirect('/');
            }
            app()->setLocale($request->segment(1));
        } else {
            app()->setLocale($main_lang);
            if (strlen($request->segment(1)) <= 2) {
                return redirect('/');
            }
        }

        return $next($request);
    }
}
