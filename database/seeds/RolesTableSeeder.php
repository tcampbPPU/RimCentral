<?php

use Illuminate\Database\Seeder;
use App\Models\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create(['title' => 'Admin']);
        Role::create(['title' => 'Front-End Developer']);
        Role::create(['title' => 'Back-End Developer']);
        Role::create(['title' => 'Sales']);
        Role::create(['title' => 'Marketing']);
        Role::create(['title' => 'Accounting']);
        Role::create(['title' => 'Customer Success']);
    }
}
