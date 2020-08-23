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
}
