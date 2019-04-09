<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('user_id');
			$table->string('user_email')->unique();
			$table->string('user_password', 60);
			$table->tinyInteger('user_email_verification')->default(false);
			$table->enum('user_role', ['admin', 'moderator', 'customer', 'freelancer']);
			$table->string('user_name');
			$table->string('user_surname');
			$table->string('user_phone');
			$table->string('user_address');
			$table->string('user_skype')->nullable();
			$table->string('user_company_name')->nullable();
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}
