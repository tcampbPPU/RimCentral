<?php

namespace App\Policies\Modules;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class CompaniesPolicy
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
        }else if ($user->tokenCan(['read-companies-dev', 'read-companies-stage', 'read-companies-prod'])) {
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
        }else if ($user->tokenCan(['add-companies-dev', 'add-companies-stage', 'add-companies-prod'])) {
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
        }else if ($user->tokenCan(['modify-companies-dev', 'modify-companies-stage', 'modify-companies-prod'])) {
            return true;
        }else {
            return false;
        }
    }
}
