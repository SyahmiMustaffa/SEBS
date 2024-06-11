<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin_seed =[
            ['adminId'=>'1'],

        ];

        foreach($admin_seed as $admin_seed){
            Admin::firstOrCreate($admin_seed);
        }
    }
}
