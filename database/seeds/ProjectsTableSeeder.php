<?php

use Illuminate\Database\Seeder;
use App\Project;
use App\Category;
use App\SubCategory;

class ProjectsTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
        DB::table('projects')->delete();
        for ($i=1; $i<21; $i++) {

            $a = rand(1,10);
            $category = Category::find($a);
            $cat = $category->category_name;

            $sub_category = SubCategory::find($a);
            $sub = $sub_category->sub_category_name;

            Project::create([
                'project_customer_id' => rand(1,5),
                'project_freelancer_id' => rand(1,5),
                'project_category' => $cat,
                'project_sub_category' => $sub,
                'project_type' => 'тип' . rand(1,3),
                'project_status' => 'создан',
                'project_title' => 'Заголовок' . $i,
                'project_descr' => 'Описание' . $i,
                'project_requirements' => 'Требования' . $i,
                'project_city' => 'Город' . $i,
                'project_country' => 'Страна' . $i,
                'project_phone' => 'Телефон' . $i,
                'project_email' => 'Email' . $i,
                'project_sum' => rand(100,10000),
                'project_currency' => 'руб',
                'project_deadline' => '01.08.2019',
                'project_feedback' => rand(100,1000),
                'project_views' => rand(1000,10000),
            ]);
        }
	}

}
