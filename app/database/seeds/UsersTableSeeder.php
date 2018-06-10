<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(0, 1) as $index)
		{
			User::create([
				'firstname'     => 'Oga',
				'lastname'    => 'Chucks',
				'email'    => 'chuks@yahoo.com',
				'password' => Hash::make('1234'),
				'remember_token' => '1'


			]);
		}
	}

}