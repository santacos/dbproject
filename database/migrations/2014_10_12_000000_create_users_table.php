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
			$table->increments('id');
			$table->string('username');
			$table->string('email')->unique();
			$table->string('password', 60);
			$table->string('firstname',20);
			$table->string('lastname',30);
			$table->string('nickname',20);
			$table->string('sex',1);
			$table->date('birthdate');
			$table->string('tel',10);
			$table->rememberToken();
			$table->timestamps();
		});

		Schema::create('teachers', function(Blueprint $table)
		{
			$table->integer('user_id')->unsigned()->primary('user_id');
			$table->foreign('user_id')->references('id')->on('users');
		});

		Schema::create('students',function(Blueprint $table)
		{
			$table->integer('user_id')->unsigned()->primary('user_id');
			$table->foreign('user_id')->references('id')->on('users');
			$table->string('description',200);
			$table->integer('year')->unsigned();
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
		Schema::drop('teachers');
		Schema::drop('students');

				
	}

}