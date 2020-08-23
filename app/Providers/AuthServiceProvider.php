<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('foo', 'App\Policies\Test');
        Gate::define('read-companies', 'App\Policies\Modules\CompanyPolicy@read');
        Gate::define('add-companies', 'App\Policies\Modules\CompanyPolicy@add');
        Gate::define('modify-companies', 'App\Policies\Modules\CompanyPolicy@modify');
    }
}
