<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'=>'K1Zura',
            'email'=>'azura@gmail.com',
            'password'=>Hash::make('123456'),
            'role_id'=>'1',
        ]);
        // DB::table('users')->insert([
        //     'name'=>'Teacher',
        //     'email'=>'teacher@gmail.com',
        //     'password'=>Hash::make('guru'),
        //     'role_id'=>'2',
        // ]);
        // DB::table('users')->insert([
        //     'name'=>'Student',
        //     'email'=>'student@gmail.com',
        //     'password'=>Hash::make('murid'),
        //     'role_id'=>'3',
        // ]);
    }
}
