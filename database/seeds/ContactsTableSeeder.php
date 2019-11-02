<?php

use Illuminate\Database\Seeder;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contact_us')->insert([
        	[
        		'name'=>'daniel jones',
        		'email'=>'dani@gmail.com',
        		'subject'=>'daniel jones',
        		'message'=>'dani',
        		'phoneNum'=>'09076453627'
        		
            ],
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
        ]);
    }
}
