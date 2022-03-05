<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class AdminSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([

            'name'=> 'Admin',
            'user_type' => 'admin',
             'email' => 'admin@gmail.com',
             'email_verified_at' => 'admin@gmail.com',
             'password'=>Hash::make('password') ,
        ]);
    }
}
