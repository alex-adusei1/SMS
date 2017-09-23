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
        
        //seeder for user_type
        DB::table('user_types')->insert([
            'name' => 'admin'
        ]);
        
        DB::table('user_types')->insert([
            'name'=>'teacher'
        ]);
        
        DB::table('user_types')->insert([
           'name'=>'parent' 
        ]);
                
                
        
        
        //seeder for users
        DB::table('users')->insert([
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin@123'),
            'residential_address' => 'Accra',
            'mobile'=>'0244000000', 
            'place_of_birth'=>'accra',
            'tribe'=>'Ga',
            'user_type_id'=>1
        ]);
        
        DB::table('schools')->insert([
            'name'=>'Lower Primary School', 
            'age_range'=>'Between 3 to 7',
            'url'=>'lower'
        ]);
        
         DB::table('schools')->insert([
            'name'=>'Upper Primary School', 
            'age_range'=>'Between 8 to 12',
             'url'=>'upper'
        ]);
         
          DB::table('schools')->insert([
            'name'=>'Junior High School', 
            'age_range'=>'Between 12 to 15',
             'url'=>'jhs'
        ]);
          
         DB::table('schools')->insert([
            'name'=>'Senior High School', 
            'age_range'=>'Between 15 to 18',
             'url'=>'shs'
        ]);  
         
          DB::table('schools')->insert([
            'name'=>'Tertiary Education', 
            'age_range'=>'18 and above ',
            'url'=>'tertiary'
        ]);
          
          // seeding for classroom
          DB::table('classrooms')->insert([
             'name'=>'class 1',
              'capacity'=>50,
              'floor'=>'ground floor',
              'location'=>'akoto block'
          ]);
          
          
          DB::table('school__subjects')->insert([
             'school_id' =>1,
              'subject'=>'English'
          ]);
          
          DB::table('school__subjects')->insert([
             'school_id'=>1,
              'subject'=>'Maths'
          ]);
          
          DB::table('school__subjects')->insert([
              'school_id'=>1,
              'subject'=>'Natural Science'
          ]);
          
          DB::table('school__subjects')->insert([
              'school_id'=>1,
              'subject'=>'French'
          ]);
          
          DB::table('school__subjects')->insert([
              'school_id'=>1,
              'subject'=>'Creative Arts'
          ]);
          
          DB::table('school__subjects')->insert([
              'school_id'=>1,
              'subject'=>'Writing'
          ]);
          
          DB::table('school__subjects')->insert([
              'school_id'=>1,
              'subject'=>'ICT'
          ]);
          
          DB::table('school__subjects')->insert([
              'school_id'=>1,
              'subject'=>'RME'
          ]);
          
    }
}
