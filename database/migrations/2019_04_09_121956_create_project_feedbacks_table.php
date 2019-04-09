<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectFeedbacksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('project_feedbacks', function(Blueprint $table)
		{
			$table->increments('project_feedbacks_id');
			$table->integer('project_feedbacks_project_id')->unsigned();
			$table->integer('project_feedbacks_user_id')->unsigned();
			$table->enum('project_feedbacks_leading_status', ['В работе', 'Заявка отклонена', 'Заявка завершена', 'Заявка на рассмотрении']);
            $table->timestamps();

            $table->foreign('project_feedbacks_project_id')->references('project_id')->on('projects');
            $table->foreign('project_feedbacks_user_id')->references('user_id')->on('users');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('project_feedbacks');
	}

}
