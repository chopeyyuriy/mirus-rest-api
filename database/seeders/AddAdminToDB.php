<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Exception;
use Spatie\Permission\Models\Role;

class AddAdminToDB extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (!$this->isRoleExist('admin')) {
            $role = Role::create([
                'name' => 'admin',
            ]);
        }
        if (!$this->isRoleExist('buyer')) {
            $role = Role::create([
                'name' => 'buyer',
            ]);
        }
        if (!$this->isRoleExist('seller')) {
            $role = Role::create([
                'name' => 'seller',
            ]);
        }

        $user = User::create([
            'role_id' => 1,
            'first_name' => "Awais",
            'last_name' => 'Sikander',
            'email' => 'sikande007@gmail.com',
            'user_type' => 'admin',
            'user_status' => 'Active',
            'email_verified_at' => now(),
            'password' => Hash::make("Awais@786"),
        ]);
        $user->assignRole('admin');

        $user = User::create([
            'role_id' => 1,
            'first_name' => "Ali",
            'last_name' => 'Khurram',
            'email' => 'ali.gguzz@gmail.com',
            'user_type' => 'admin',
            'user_status' => 'Active',
            'email_verified_at' => now(),
            'password' => Hash::make("aliguzz1@3"),
        ]);
        $user->assignRole('admin');
    }

    public function isRoleExist($role_name)
    {
        try {
            $bool = Count(Role::findByName($role_name)->get()) > 0;
            return $bool;
        } catch (Exception $e) {
            return false;
        }
    }
}
