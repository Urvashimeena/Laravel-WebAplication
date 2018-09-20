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
 
     Eloquent::unguard();
     $this->call('AdminTableSeeder');
 
    }
 }
 
 
 
  Class AdminTableSeeder extends Seeder
{
  public function run()
  {
    DB::table('admin')->delete();
    
    /*Admin::create(
     array(
    	
        'email'=> 'urvashimeena1998@gmail.com',
        'password' => Hash::make('a1b2c3d$')
    ));*/
    DB::table('admin')->insert(
                       
                                array(
                                        'email' => 'urvashimeena1998@gmail.com',
                                        'password' => Hash::make('a1b2c3d$'),
                                        //  'password' => 'a1b2c3d$',
                                       
                                ));
  }
}

