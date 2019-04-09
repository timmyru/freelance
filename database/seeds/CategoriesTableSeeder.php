<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoriesTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
        DB::table('categories')->delete();
        for ($i=0; $i<10; $i++) {
            Category::create(['category_name' => 'Тестовая категория #'.$i]);
        }
	}

}
