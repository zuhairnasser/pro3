<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PermissionMiddleware
{
    private $availablePermissions = [
        'admin',
        'repo_manager',
        
    ];

    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param Closure $next
     * @param $authorizedPermissions
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $authorizedPermissions)
    {
        $permissions = explode('|', $authorizedPermissions);
        if(Auth::check()) {
            if($this->hasOnePermission($permissions)) {
                return $next($request);
            } else {
                session()->flash('error', 'ليس لديك صلاحية الدخول لهذة الصفحة');
                abort(403, 'ليس لديك الصلاحيات الكافية لإجراء هذة العملية.');
            }
        } else {
            return redirect(route('login'));
        }
    }

    private function hasOnePermission($permissions): bool {
        $userPermissions = explode(',', Auth::user()->permissions);
        foreach ($userPermissions as $permission) {
            if(in_array($permission, $permissions, true)) {
                return true;
            }
        }
        return false;
    }
}
