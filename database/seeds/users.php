<?php

use Illuminate\Database\Seeder;

class users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        	'id' =>'1',
        	'name' =>'hieu',
        	'email' =>'buihieu09@gmail.com',
        	'password' =>bcrypt('123456')

        ]);
    }
}
