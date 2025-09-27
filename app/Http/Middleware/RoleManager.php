<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 
use Symfony\Component\HttpFoundation\Response;


class RoleManager
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $role)
{
    if (!Auth::check()) {
        return redirect()->route('login');
    }

    $authUserRole = Auth::user()->role;

    // map textual roles to numeric role codes
    $map = [
        'admin'    => 0,
        'vendor'   => 1,
        'customer' => 2,
    ];

    if (!isset($map[$role])) {
        abort(403);
    }

    if ($authUserRole !== $map[$role]) {
        // Redirect to correct dashboard based on their real role
        switch ($authUserRole) {
            case 0:
                return redirect()->route('admin');
            case 1:
                return redirect()->route('vendor');
            case 2:
            default:
                return redirect()->route('dashboard');
        }
    }

    return $next($request);
}

}
