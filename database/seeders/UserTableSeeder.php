<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
        User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.lt',
            'born_at' => '1970-01-01',
            'role' => 'ADMIN',
            'password' => bcrypt('adminadmin')
        ]);
        User::create([
            'name' => 'User',
            'email' => 'user@user.lt',
            'born_at' => '1970-01-01',
            'role' => 'CUSTOMER',
            'password' => bcrypt('useruser')
        ]);
    }
}
