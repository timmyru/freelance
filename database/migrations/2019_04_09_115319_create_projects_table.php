<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('projects', function(Blueprint $table)
		{
			$table->increments('project_id');
			$table->integer('project_customer_id')->unsigned();
			$table->integer('project_freelancer_id')->unsigned()->nullable();
			$table->string('project_category');
			$table->string('project_sub_category');
			$table->enum('project_type', ['тип1', 'тип2', 'тип3']);
			$table->enum('project_status', ['создан', 'опубликован', 'в работе', 'закрыт']);
			$table->string('project_title');
			$table->text('project_descr');
			$table->text('project_requirements');
			$table->string('project_img')->nullable();
			$table->string('project_city');
			$table->string('project_country');
			$table->string('project_phone');
			$table->string('project_email');
			$table->integer('project_sum');
			$table->enum('project_currency', ['руб', '$', 'euro'])->default('руб');
			$table->timestamp('project_deadline');
			$table->integer('project_feedback');
			$table->integer('project_views');
			$table->tinyInteger('project_notification')->default(true);
            $table->enum('project_payment_type', ['по договору', 'без предоплаты', 'возможна предоплата', 'безопасная сделка']);
            $table->timestamp('project_publishing_deadline');
			$table->timestamps();

            $table->foreign('project_customer_id')->references('user_id')->on('users');
            $table->foreign('project_freelancer_id')->references('user_id')->on('users');
            $table->foreign('project_category')->references('category_name')->on('categories');
            $table->foreign('project_sub_category')->references('sub_category_name')->on('sub_categories');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('projects');
	}

}
