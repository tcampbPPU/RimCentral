<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds for the users table.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'first_name'        => 'Admin',
            'last_name'         => 'User',
            'email'             => 'admin@rimsys.io',
            'email_verified_at' => now(),
            'password'          => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token'    => Str::random(10),
            'timezone'          => 'America/New_York'
        ])->roles()->attach(1);
    }
}
