<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id'=>1,
            'name'=>'admin',
            'email'=>'admin@gmail.com',
            'password'=>Hash::make('123456'),
            'type'=>0,
        ]);
    }
}
