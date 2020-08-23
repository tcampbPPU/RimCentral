<?php

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // INTERNAL PERMISSIONS
        Permission::create([
            'permission_level_id' => 1, // internal
            'name' => 'add-users-internal',
            'display_name' => 'Add Users (Internal)',
        ]);
        Permission::create([
            'permission_level_id' => 1, // internal
            'name' => 'add-roles-internal',
            'display_name' => 'Add Roles (Internal)',
        ]);
        Permission::create([
            'permission_level_id' => 1, // internal
            'name' => 'add-permissions-internal',
            'display_name' => 'Add Permissions (Internal)',
        ]);
        Permission::create([
            'permission_level_id' => 1, // internal
            'name' => 'read-users-internal',
            'display_name' => 'Read Users (Internal)',
        ]);
        Permission::create([
            'permission_level_id' => 1, // internal
            'name' => 'read-roles-internal',
            'display_name' => 'Read Roles (Internal)',
        ]);
        Permission::create([
            'permission_level_id' => 1, // internal
            'name' => 'read-permissions-internal',
            'display_name' => 'Read Permissions (Internal)',
        ]);
        Permission::create([
            'permission_level_id' => 1, // internal
            'name' => 'modify-users-internal',
            'display_name' => 'Modify Users (Internal)',
        ]);
        Permission::create([
            'permission_level_id' => 1, // internal
            'name' => 'modify-roles-internal',
            'display_name' => 'Modify Roles (Internal)',
        ]);
        Permission::create([
            'permission_level_id' => 1, // internal
            'name' => 'modify-permissions-internal',
            'display_name' => 'Modify Permissions (Internal)',
        ]);

        // MODULES PERMISSIONS
        // Add Companies
        Permission::create([
            'permission_level_id' => 2, // dev
            'name' => 'add-companies-dev',
            'display_name' => 'Add Companies (Dev Env)',
        ]);
        Permission::create([
            'permission_level_id' => 3, // stage
            'name' => 'add-companies-stage',
            'display_name' => 'Add Companies (Stage Env)',
        ]);
        Permission::create([
            'permission_level_id' => 4, // prod
            'name' => 'add-companies-prod',
            'display_name' => 'Add Companies (Prod Env)',
        ]);

        // Read Companies
        Permission::create([
            'permission_level_id' => 2, // dev
            'name' => 'read-companies-dev',
            'display_name' => 'Read Companies (Dev Env)',
        ]);
        Permission::create([
            'permission_level_id' => 3, // stage
            'name' => 'read-companies-stage',
            'display_name' => 'Read Companies (Stage Env)',
        ]);
        Permission::create([
            'permission_level_id' => 4, // prod
            'name' => 'read-companies-prod',
            'display_name' => 'Read Companies (Prod Env)',
        ]);

        // Modify Companies
        Permission::create([
            'permission_level_id' => 2, // dev
            'name' => 'modify-companies-dev',
            'display_name' => 'Modify Companies (Dev Env)',
        ]);
        Permission::create([
            'permission_level_id' => 3, // stage
            'name' => 'modify-companies-stage',
            'display_name' => 'Modify Companies (Stage Env)',
        ]);
        Permission::create([
            'permission_level_id' => 4, // prod
            'name' => 'modify-companies-prod',
            'display_name' => 'Modify Companies (Prod Env)',
        ]);
    }
}
