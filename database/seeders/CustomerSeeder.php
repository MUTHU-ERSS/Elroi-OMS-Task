<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Customer;

class CustomerSeeder extends Seeder
{
    public function run(): void
    {
        Customer::insert([
            ['name'=>'Ravi','email'=>'ravi@test.com','mobile_no'=>'9000000001'],
            ['name'=>'Kumar','email'=>'kumar@test.com','mobile_no'=>'9000000002'],
            ['name'=>'Anita','email'=>'anita@test.com','mobile_no'=>'9000000003'],
            ['name'=>'Suresh','email'=>'suresh@test.com','mobile_no'=>'9000000004'],
            ['name'=>'Meena','email'=>'meena@test.com','mobile_no'=>'9000000005'],
        ]);
    }
}

