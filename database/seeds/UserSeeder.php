<?php

use Illuminate\Database\Seeder;
use Illuminate\support\facades\DB;
use Illuminate\support\facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([[
        	'name' => 'ghaidaa kneish' ,
        	'email' => 'gh.kneish@gmail.com' ,
        	'password' => Hash::make('0932566275')
        ],
        [
            'name' => 'ammar kneish' ,
            'email' => 'ammar.kneish@gmail.com' ,
            'password' => Hash::make('ammar1998')
        ]]);
    }
}
