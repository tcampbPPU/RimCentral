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
        // * INTERNAL PERMISSIONS
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

        // * MODULES PERMISSIONS
        // COMPANIES
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

        // DOCUMENTS
        // Add Documents
        Permission::create([
            'permission_level_id' => 2, // dev
            'name' => 'add-documents-dev',
            'display_name' => 'Add Documents (Dev Env)',
        ]);
        Permission::create([
            'permission_level_id' => 3, // stage
            'name' => 'add-documents-stage',
            'display_name' => 'Add Documents (Stage Env)',
        ]);
        Permission::create([
            'permission_level_id' => 4, // prod
            'name' => 'add-documents-prod',
            'display_name' => 'Add Documents (Prod Env)',
        ]);

        // Read Documents
        Permission::create([
            'permission_level_id' => 2, // dev
            'name' => 'read-documents-dev',
            'display_name' => 'Read Documents (Dev Env)',
        ]);
        Permission::create([
            'permission_level_id' => 3, // stage
            'name' => 'read-documents-stage',
            'display_name' => 'Read Documents (Stage Env)',
        ]);
        Permission::create([
            'permission_level_id' => 4, // prod
            'name' => 'read-documents-prod',
            'display_name' => 'Read Documents (Prod Env)',
        ]);

        // Modify Documents
        Permission::create([
            'permission_level_id' => 2, // dev
            'name' => 'modify-documents-dev',
            'display_name' => 'Modify Documents (Dev Env)',
        ]);
        Permission::create([
            'permission_level_id' => 3, // stage
            'name' => 'modify-documents-stage',
            'display_name' => 'Modify Documents (Stage Env)',
        ]);
        Permission::create([
            'permission_level_id' => 4, // prod
            'name' => 'modify-documents-prod',
            'display_name' => 'Modify Documents (Prod Env)',
        ]);

        // ESSENTIAL PRINCIPLES
        // Add Essential Principles
        Permission::create([
            'permission_level_id' => 2, // dev
            'name' => 'add-essential-principles-dev',
            'display_name' => 'Add Essential Principles (Dev Env)',
        ]);
        Permission::create([
            'permission_level_id' => 3, // stage
            'name' => 'add-essential-principles-stage',
            'display_name' => 'Add Essential Principles (Stage Env)',
        ]);
        Permission::create([
            'permission_level_id' => 4, // prod
            'name' => 'add-essential-principles-prod',
            'display_name' => 'Add Essential Principles (Prod Env)',
        ]);

        // Read Essential Principles
        Permission::create([
            'permission_level_id' => 2, // dev
            'name' => 'read-essential-principles-dev',
            'display_name' => 'Read Essential Principles (Dev Env)',
        ]);
        Permission::create([
            'permission_level_id' => 3, // stage
            'name' => 'read-essential-principles-stage',
            'display_name' => 'Read Essential Principles (Stage Env)',
        ]);
        Permission::create([
            'permission_level_id' => 4, // prod
            'name' => 'read-essential-principles-prod',
            'display_name' => 'Read Essential Principles (Prod Env)',
        ]);

        // Modify Essential Principles
        Permission::create([
            'permission_level_id' => 2, // dev
            'name' => 'modify-essential-principles-dev',
            'display_name' => 'Modify Essential Principles (Dev Env)',
        ]);
        Permission::create([
            'permission_level_id' => 3, // stage
            'name' => 'modify-essential-principles-stage',
            'display_name' => 'Modify Essential Principles (Stage Env)',
        ]);
        Permission::create([
            'permission_level_id' => 4, // prod
            'name' => 'modify-essential-principles-prod',
            'display_name' => 'Modify Essential Principles (Prod Env)',
        ]);

        // PRODUCTS
        // Add Products
        Permission::create([
            'permission_level_id' => 2, // dev
            'name' => 'add-products-dev',
            'display_name' => 'Add Products (Dev Env)',
        ]);
        Permission::create([
            'permission_level_id' => 3, // stage
            'name' => 'add-products-stage',
            'display_name' => 'Add Products (Stage Env)',
        ]);
        Permission::create([
            'permission_level_id' => 4, // prod
            'name' => 'add-products-prod',
            'display_name' => 'Add Products (Prod Env)',
        ]);

        // Read Products
        Permission::create([
            'permission_level_id' => 2, // dev
            'name' => 'read-products-dev',
            'display_name' => 'Read Products (Dev Env)',
        ]);
        Permission::create([
            'permission_level_id' => 3, // stage
            'name' => 'read-products-stage',
            'display_name' => 'Read Products (Stage Env)',
        ]);
        Permission::create([
            'permission_level_id' => 4, // prod
            'name' => 'read-products-prod',
            'display_name' => 'Read Products (Prod Env)',
        ]);

        // Modify Products
        Permission::create([
            'permission_level_id' => 2, // dev
            'name' => 'modify-products-dev',
            'display_name' => 'Modify Products (Dev Env)',
        ]);
        Permission::create([
            'permission_level_id' => 3, // stage
            'name' => 'modify-products-stage',
            'display_name' => 'Modify Products (Stage Env)',
        ]);
        Permission::create([
            'permission_level_id' => 4, // prod
            'name' => 'modify-products-prod',
            'display_name' => 'Modify Products (Prod Env)',
        ]);

        // REGISTRATIONS
        // Add Registrations
        Permission::create([
            'permission_level_id' => 2, // dev
            'name' => 'add-registrations-dev',
            'display_name' => 'Add Registrations (Dev Env)',
        ]);
        Permission::create([
            'permission_level_id' => 3, // stage
            'name' => 'add-registrations-stage',
            'display_name' => 'Add Registrations (Stage Env)',
        ]);
        Permission::create([
            'permission_level_id' => 4, // prod
            'name' => 'add-registrations-prod',
            'display_name' => 'Add Registrations (Prod Env)',
        ]);

        // Read Registrations
        Permission::create([
            'permission_level_id' => 2, // dev
            'name' => 'read-registrations-dev',
            'display_name' => 'Read Registrations (Dev Env)',
        ]);
        Permission::create([
            'permission_level_id' => 3, // stage
            'name' => 'read-registrations-stage',
            'display_name' => 'Read Registrations (Stage Env)',
        ]);
        Permission::create([
            'permission_level_id' => 4, // prod
            'name' => 'read-registrations-prod',
            'display_name' => 'Read Registrations (Prod Env)',
        ]);

        // Modify Registrations
        Permission::create([
            'permission_level_id' => 2, // dev
            'name' => 'modify-registrations-dev',
            'display_name' => 'Modify Registrations (Dev Env)',
        ]);
        Permission::create([
            'permission_level_id' => 3, // stage
            'name' => 'modify-registrations-stage',
            'display_name' => 'Modify Registrations (Stage Env)',
        ]);
        Permission::create([
            'permission_level_id' => 4, // prod
            'name' => 'modify-registrations-prod',
            'display_name' => 'Modify Registrations (Prod Env)',
        ]);

        // STANDARDS
        // Add Standards
        Permission::create([
            'permission_level_id' => 2, // dev
            'name' => 'add-standards-dev',
            'display_name' => 'Add Standards (Dev Env)',
        ]);
        Permission::create([
            'permission_level_id' => 3, // stage
            'name' => 'add-standards-stage',
            'display_name' => 'Add Standards (Stage Env)',
        ]);
        Permission::create([
            'permission_level_id' => 4, // prod
            'name' => 'add-standards-prod',
            'display_name' => 'Add Standards (Prod Env)',
        ]);

        // Read Registrations
        Permission::create([
            'permission_level_id' => 2, // dev
            'name' => 'read-standards-dev',
            'display_name' => 'Read Standards (Dev Env)',
        ]);
        Permission::create([
            'permission_level_id' => 3, // stage
            'name' => 'read-standards-stage',
            'display_name' => 'Read Standards (Stage Env)',
        ]);
        Permission::create([
            'permission_level_id' => 4, // prod
            'name' => 'read-standards-prod',
            'display_name' => 'Read Standards (Prod Env)',
        ]);

        // Modify Registrations
        Permission::create([
            'permission_level_id' => 2, // dev
            'name' => 'modify-standards-dev',
            'display_name' => 'Modify Standards (Dev Env)',
        ]);
        Permission::create([
            'permission_level_id' => 3, // stage
            'name' => 'modify-standards-stage',
            'display_name' => 'Modify Standards (Stage Env)',
        ]);
        Permission::create([
            'permission_level_id' => 4, // prod
            'name' => 'modify-standards-prod',
            'display_name' => 'Modify Standards (Prod Env)',
        ]);
    }
}
