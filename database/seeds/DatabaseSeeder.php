<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//         $this->call(UsersTableSeeder::class);
        DB::table('users')->insert([
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin@123'),
            'residential_address' => 'Accra',
            'mobile'=>'0244000000', 
            'city'=>'dansoman', 
            'place_of_birth'=>'accra',
            'tribe'=>'Ga',
        ]);
    }
}
