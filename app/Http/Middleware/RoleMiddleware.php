<?php
namespace App\Http\Middleware;
use Closure;
class RoleMiddleware
{

    /**
     * Handle an incoming request.
     * @param $request
     * @param Closure $next
     * @param $role
     * @param $permission
     * @return mixed
     */
    public function handle($request, Closure $next, $role = null, $permission = null)
    {
        if( $role != null && !auth()->user()->hasRole($role)) {
            abort(404);
        }
        if($permission !== null && !auth()->user()->can($permission)) {
            abort(403);
        }
        return $next($request);
    }
}
