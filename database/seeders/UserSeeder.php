<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user_seed =[
            ['id'=>'1','userFname'=>'Harith','userLname'=>'Irfan','email'=>'cwhirfan90@gmail.com','phone_number'=>'011323423145','password' => Hash::make('Admin1'),'userProfile'=>'1'],

        ];

        foreach($user_seed as $user_seed){
            User::firstOrCreate($user_seed);
        }
    }
}
