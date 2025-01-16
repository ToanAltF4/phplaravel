<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // User::create([
        //     'name' => 'Toàn Admin',
        //     'email' => 'toanpdse180165@fpt.edu.vn',
        //     'password' => bcrypt('password'),
        // ]);
        User::factory()->count(1000)->create();
        
    }
}
