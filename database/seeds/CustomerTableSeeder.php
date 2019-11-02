<?php

use Illuminate\Database\Seeder;

class CustomerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customers')->insert([
        	[
        		'name'=>'daniel jones',
        		'email'=>'dani@gmail.com',
        		'contact'=>'daniel jones',
        		'address'=>'dani'
        		
        		
            ],
            [
        		'name'=>'jones',
        		'email'=>'jones@gmail.com',
        		'contact'=>'ddjfjue jones',
        		'address'=>'eheidjkei'
        		
        		
            ],
            [
        		'name'=>'sani',
        		'email'=>'sani@gmail.com',
        		'contact'=>'eiejdueikjsjw',
        		'address'=>'dani kedd'
            ]
            ]);
    }
}
