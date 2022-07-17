<?php

namespace App\View\Components;

use Illuminate\Support\Facades\Auth;
use Illuminate\View\Component;

class HasPermission extends Component
{

    private $permissions;

    private function isUserCanDoThisOperation():bool {
        if(Auth::check()) {
            $userPermissions = explode(',', Auth::user()->permissions);
            foreach ($userPermissions as $permission) {
                if(in_array($permission, $this->permissions, true)) {
                    return true;
                }
            }
        }
        return false;
    }

    /**
     * Create a new component instance.
     *
     * @param $permissions
     */
    public function __construct($permissions)
    {
        $this->permissions = explode('|', $permissions);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        if($this->isUserCanDoThisOperation()) {
            return view('components.has-permission-component');
        }

        return null;
    }
}
