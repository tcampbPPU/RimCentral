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
        // 'App\Model' => 'App\Policies\ModelPolicy', // - Left over from base boilerplate
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        
        // * INTERNAL GATES
        // Users
        Gate::define('read-user-internal', 'App\Policies\Internal\InternalUserPolicy@read');
        Gate::define('add-user-internal', 'App\Policies\Internal\InternalUserPolicy@add');
        Gate::define('modify-user-internal', 'App\Policies\Internal\InternalUserPolicy@modify');

        // Permissions
        Gate::define('read-permissions-internal', 'App\Policies\Internal\InternalPermissionPolicy@read');
        Gate::define('add-permissions-internal', 'App\Policies\Internal\InternalPermissionPolicy@add');
        Gate::define('modify-permissions-internal', 'App\Policies\Internal\InternalPermissionPolicy@modify');

        // Roles
        Gate::define('read-roles-internal', 'App\Policies\Internal\InternalRolePolicy@read');
        Gate::define('add-roles-internal', 'App\Policies\Internal\InternalRolePolicy@add');
        Gate::define('modify-roles-internal', 'App\Policies\Internal\InternalRolePolicy@modify');


        // * MODULE GATES
        // Companies
        Gate::define('read-companies', 'App\Policies\Modules\CompaniesPolicy@read');
        Gate::define('add-companies', 'App\Policies\Modules\CompaniesPolicy@add');
        Gate::define('modify-companies', 'App\Policies\Modules\CompaniesPolicy@modify');

        // Documents
        Gate::define('read-documents', 'App\Policies\Modules\DocumentsPolicy@read');
        Gate::define('add-documents', 'App\Policies\Modules\DocumentsPolicy@add');
        Gate::define('modify-documents', 'App\Policies\Modules\DocumentsPolicy@modify');

        // Essential Principles
        Gate::define('read-essential-principles', 'App\Policies\Modules\EssentialPrinciplePolicy@read');
        Gate::define('add-essential-principles', 'App\Policies\Modules\EssentialPrinciplePolicy@add');
        Gate::define('modify-essential-principles', 'App\Policies\Modules\EssentialPrinciplePolicy@modify');
        
        // Products
        Gate::define('read-products', 'App\Policies\Modules\ProductsPolicy@read');
        Gate::define('add-products', 'App\Policies\Modules\ProductsPolicy@add');
        Gate::define('modify-products', 'App\Policies\Modules\ProductsPolicy@modify');

        // Registrations
        Gate::define('read-registrations', 'App\Policies\Modules\RegistrationsPolicy@read');
        Gate::define('add-registrations', 'App\Policies\Modules\RegistrationsPolicy@add');
        Gate::define('modify-registrations', 'App\Policies\Modules\RegistrationsPolicy@modify');
        
        // Standards
        Gate::define('read-standards', 'App\Policies\Modules\StandardsPolicy@read');
        Gate::define('add-standards', 'App\Policies\Modules\StandardsPolicy@add');
        Gate::define('modify-standards', 'App\Policies\Modules\StandardsPolicy@modify');
    }
}
