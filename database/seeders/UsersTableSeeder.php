<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Str;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'admin',
                'username' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('root'),
                'remember_token' => Str::random(10),
                'role' => 'admin',
                'email_verified_at' => now(),
                'created_at'=> now(),
                'updated_at'=> now(),
            ],
            [
                'name' => 'user',
                'username' => 'user',
                'email' => 'user@gmail.com',
                'password' => Hash::make('root'),
                'remember_token' => Str::random(10),
                'role' => 'user',
                'email_verified_at' => now(),
                'created_at'=> now(),
                'updated_at'=> now(),
            ],
           
        ];
        DB::table('users')->insert($users);
        //factory generator
        User::factory()->count(10)->create();
    }
}
