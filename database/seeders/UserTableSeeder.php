<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user1 = new User;
        $user1->username = "Lebronjames0101";
        $user1->email = "bigchung@gmail.co";
        $user1->password = "hello";
        $user1->save();

        User::factory()->count(20)->create();
        
    }
}
