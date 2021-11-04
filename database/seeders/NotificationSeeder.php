<?php

namespace Database\Seeders;

use App\Models\NotificationOptions;
use Illuminate\Database\Seeder;

class NotificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // User Management
        for ($i = 0; $i < 5; $i++) {
            NotificationOptions::create([
                'name'=>"user notification $i",
                'recipents'=>'admin',
                'template'=>'template1',
                'status' => (rand(1,10)%2),
                'parent_name'=> "User Management",
                'level'=>'0'
            ]);
        }
        // eCommerce: Products
        for ($i = 0; $i < 5; $i++) {
            NotificationOptions::create([
                'name'=>"user notification $i",
                'recipents'=>'admin',
                'template'=>'template1',
                'status' => (rand(1,10)%2),
                'parent_name'=> "eCommerce: Products",
                'level'=>'0'
            ]);
        }
        // eCommerce: Orders
        for ($i = 0; $i < 5; $i++) {
            NotificationOptions::create([
                'name'=>"user notification $i",
                'recipents'=>'admin',
                'template'=>'template1',
                'status' => (rand(1,10)%2),
                'parent_name'=> "eCommerce: Orders",
                'level'=>'0'
            ]);
        }
        // Content Management
        for ($i = 0; $i < 5; $i++) {
            NotificationOptions::create([
                'name'=>"user notification $i",
                'recipents'=>'admin',
                'template'=>'template1',
                'status' => (rand(1,10)%2),
                'parent_name'=> "Content Management",
                'level'=>'0'
            ]);
        }
        // Messaging
        for ($i = 0; $i < 5; $i++) {
            NotificationOptions::create([
                'name'=>"user notification $i",
                'recipents'=>'admin',
                'template'=>'template1',
                'status' => (rand(1,10)%2),
                'parent_name'=> "Messaging",
                'level'=>'0'
            ]);
        }
    }
}
