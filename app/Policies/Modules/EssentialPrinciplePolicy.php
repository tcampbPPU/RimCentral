<?php

namespace App\Policies\Modules;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class EssentialPrinciple
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
        }else if ($user->tokenCan(['read-essential-principles-dev', 'read-essential-principles-stage', 'read-essential-principles-prod'])) {
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
        }else if ($user->tokenCan(['add-essential-principles-dev', 'add-essential-principles-stage', 'add-essential-principles-prod'])) {
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
        }else if ($user->tokenCan(['modify-essential-principles-dev', 'modify-essential-principles-stage', 'modify-essential-principles-prod'])) {
            return true;
        }else {
            return false;
        }
    }
}