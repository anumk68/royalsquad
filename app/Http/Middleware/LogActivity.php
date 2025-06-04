<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\ActivityLog;
use Illuminate\Support\Facades\Auth;

class LogActivity
{
    public function handle(Request $request, Closure $next)
    {
        ActivityLog::create([
            'user_id' => Auth::id(),
            'action' => 'Visited ' . $request->path(),
            'url' => $request->fullUrl(),
            'ip_address' => $request->ip(),
            'user_agent' => $request->header('User-Agent'),
        ]);

        return $next($request);
    }
}
