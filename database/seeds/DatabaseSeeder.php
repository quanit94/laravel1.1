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
        $admin = array('user' => 'quanit94@aiko.com','password' =>Hash::make('quanbn94') ,'salt' => 'quanbn94', 'level' => '1', 'name' => 'Quân Trần', 'image' => '/profilepics'.'/quantran.jpg');
        for($i=0; $i <10; $i++){
        	$user[] = array('user' => 'quanit'.$i.'@aiko.com','password' =>Hash::make('12345') ,'salt'=>'12345', 'level' => '0', 'name' => 'Quân Trần', 'image' => '/profilepics'.'/quanit94.jpg');
        }
        DB::table('user')->insert($admin);
        DB::table('user')->insert($user);
    }
}
