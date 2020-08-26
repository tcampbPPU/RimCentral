<?php

namespace App\Policies\Modules;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class DocumentsPolicy
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
        }else if ($user->tokenCan(['read-documents-dev', 'read-documents-stage', 'read-documents-prod'])) {
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
        }else if ($user->tokenCan(['add-documents-dev', 'add-documents-stage', 'add-documents-prod'])) {
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
        }else if ($user->tokenCan(['modify-documents-dev', 'modify-documents-stage', 'modify-documents-prod'])) {
            return true;
        }else {
            return false;
        }
    }
}