<?php

use Illuminate\Database\Seeder;

class CompanyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customers')->insert([
        	//[
        	//	'name' => Str::random(10),
            //  'email' => Str::random(10).'@gmail.com',
              //'subject' => Str::random(10),
               // 'message' => Str::random(10),
                //'phoneNum' => Str::random(10),
        		
           // ],
            [
        		'name'=>'jones',
        		'email'=>'jones@gmail.com',
        		'subject'=>'ddjfjue jones',
        		'message'=>'eheidjkei',
        		'phoneNum'=>'0907483763849'
        		
            ],
            [
        		'name'=>'sani',
        		'email'=>'sani@gmail.com',
        		'subject'=>'eiejdueik, jsjw',
        		'message'=>'dani kedd',
        		'phoneNum'=>'090766448399'
        		
            ]
    }
}
