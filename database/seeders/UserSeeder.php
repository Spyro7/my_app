<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::create([
           'first_name' => 'admin',
           'last_name' => 'admin',
           'email' => 'admin@admin.com',
           'phone' => '+998901234567',
           'password' => Hash::make('123456'),
        ]);

        $admin->roles()->attach(1);

        User::factory(10)->hasAttached([Role::find(2)])->create();
    }
}
