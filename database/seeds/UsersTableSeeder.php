<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
        DB::table('users')->delete();
        for ($i=1; $i<6; $i++) {
            User::create([
                'user_email' => 'abc@mail'.$i.'ru',
                'user_password' => hash('md5', $i),
                'user_role' => $i%2==0 ? 'customer' : 'freelancer',
                'user_name' => "имя$i",
                'user_surname' => "фамилия$i",
                'user_phone' => "телефон$i",
                'user_address' => "адрес$i",
            ]);
        }
	}

}
