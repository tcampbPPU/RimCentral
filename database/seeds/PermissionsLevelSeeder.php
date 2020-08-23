<?php

use App\Models\PermissionLevel;
use Illuminate\Database\Seeder;

class PermissionsLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PermissionLevel::create(['level' => 'internal']);
        PermissionLevel::create(['level' => 'development']);
        PermissionLevel::create(['level' => 'staging']);
        PermissionLevel::create(['level' => 'production']);
    }
}
