<?php

namespace App\Policies\Internal;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class InternalRolePolicy
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
