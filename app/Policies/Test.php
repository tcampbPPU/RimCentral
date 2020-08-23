<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class Test
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __invoke($user) {
        if ($user->is_super_admin) {
            return true;
        }
        else if ($user->tokenCan('server:update')) {
            return true;
        }else {
            return false;
        }
    }
}
