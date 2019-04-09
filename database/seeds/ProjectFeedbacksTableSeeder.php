<?php

use Illuminate\Database\Seeder;
use App\ProjectFeedback;

class ProjectFeedbacksTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
        DB::table('projects')->delete();
        for ($i=1; $i<21; $i++) {
            ProjectFeedback::create([
                'project_feedbacks_project_id' => rand(1,20),
                'project_feedbacks_user_id' => rand(1,5),
                'project_feedbacks_leading_status' => 'Заявка на рассмотрении',
            ]);
        }
	}

}
