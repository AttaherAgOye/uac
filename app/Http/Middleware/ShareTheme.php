<?php

namespace App\Http\Middleware;

use App\Models\Setting;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Symfony\Component\HttpFoundation\Response;

class ShareTheme
{
    public function handle(Request $request, Closure $next): Response
    {
        try {
            $theme = Setting::getTheme();
        } catch (\Exception $e) {
            $theme = 'green';
        }

        View::share('siteTheme', $theme);

        return $next($request);
    }
}
