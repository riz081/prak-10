<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('employees')->insert([
            [
                'firstname' => 'Budi',
                'lastname' => 'Binomo',
                'email'=> 'Budi@gmail.com',
                'age' => 21,
                'position_id' => 1
            ],
            [
                'firstname' => 'Ramos',
                'lastname' => 'Vanhoch',
                'email'=> 'ramosvan@gmail.com',
                'age' => 43,
                'position_id' => 3
            ]
        ]);
    }
}
