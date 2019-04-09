<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		$this->call('CategoriesTableSeeder');
		$this->call('UsersTableSeeder');
		$this->call('SubCategoriesTableSeeder');
		$this->call('ProjectsTableSeeder');
		//this->call('ProjectFeedbacksTableSeeder');

	}

}
