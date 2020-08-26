<?php

namespace App\Policies\Internal;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class InternalPermissionPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Description - Check if user can do action
     * @param \App\Models\User user
     * @return bool
     */
    public function read(User $user): bool {
        if ($user->is_super_admin) {
            return true;
        }else if ($user->tokenCan(['read-permissions-internal'])) {
            return true;
        }else {
            return false;
        }
    }

    /**
     * Description - Check if user can do action
     * @param \App\Models\User user
     * @return bool
     */
    public function add(User $user): bool {
        if ($user->is_super_admin) {
            return true;
        }else if ($user->tokenCan(['add-permissions-internal'])) {
            return true;
        }else {
            return false;
        }
    }

    /**
     * Description - Check if user can do action
     * @param \App\Models\User user
     * @return bool
     */
    public function modify(User $user): bool {
        if ($user->is_super_admin) {
            return true;
        }else if ($user->tokenCan(['modify-permissions-internal'])) {
            return true;
        }else {
            return false;
        }
    }    
}
