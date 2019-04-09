<?php

use Illuminate\Database\Seeder;
use App\SubCategory;

class SubCategoriesTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
        DB::table('sub_categories')->delete();
        for ($i=0; $i<20; $i++) {
            SubCategory::create([
                'sub_category_name' => 'Тестовая субкатегория #'.$i,
                'sub_category_category_id' => rand(1,10),
            ]);
        }
	}

}
