<?php

namespace App\Policies\Modules;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class StandardsPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct() {
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
        }else if ($user->tokenCan(['read-standards-dev', 'read-standards-stage', 'read-standards-prod'])) {
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
        }else if ($user->tokenCan(['add-standards-dev', 'add-standards-stage', 'add-standards-prod'])) {
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
        }else if ($user->tokenCan(['modify-standards-dev', 'modify-standards-stage', 'modify-standards-prod'])) {
            return true;
        }else {
            return false;
        }
    }
}