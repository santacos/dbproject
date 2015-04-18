<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActivitiesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('activities', function(Blueprint $table)
		{
			$table->increments('act_id');
			$table->string('name',100);
			$table->string('detail',1000);
			$table->date('start_date');
			$table->date('end_date');
			$table->integer('aff_id')->unsigned();
			$table->foreign('aff_id')->references('aff_id')->on('affiliations');
			$table->timestamps();
		});




		Schema::create('advise_activity',function(Blueprint $table)
		{
			$table->integer('user_id')->unsigned();
			$table->foreign('user_id')->references('id')->on('users');

			$table->integer('act_id')->unsigned();
			$table->foreign('act_id')->references('act_id')->on('activities');

			$table->primary(['user_id','act_id']);
		});

		Schema::create('manage_activity',function(Blueprint $table)
		{
			$table->integer('user_id')->unsigned();
			$table->foreign('user_id')->references('id')->on('users');

			$table->integer('act_id')->unsigned();
			$table->foreign('act_id')->references('act_id')->on('activities');

			$table->primary(['user_id','act_id']);
		});

		Schema::create('activity_department',function(Blueprint $table)
		{
			$table->increments('dep_id');
			$table->string('name',40);
			$table->string('default_detail',400);
			$table->timestamps();
		});

		Schema::create('interest_department',function(Blueprint $table)
		{
			$table->integer('user_id')->unsigned();
			$table->foreign('user_id')->references('id')->on('users');

			$table->integer('dep_id')->unsigned();
			$table->foreign('dep_id')->references('dep_id')->on('activity_department');

			$table->primary(['user_id','dep_id']);
		});
		
		Schema::create('recruitment',function(Blueprint $table)
		{
			$table->increments('rec_id');

			$table->integer('act_id')->unsigned();
			$table->foreign('act_id')->references('act_id')->on('activities');

			$table->integer('dep_id')->unsigned();
			$table->foreign('dep_id')->references('dep_id')->on('activity_department');

			$table->string('edited_dep_detail',400);
			$table->integer('min_num')->unsigned();
			$table->integer('current_num')->unsigned();
			$table->integer('max_num')->unsigned();
		});

		Schema::create('application',function(Blueprint $table)
		{
			$table->increments('app_id');
			
			$table->string('message',300);
			$table->integer('status')->unsigned();
			$table->boolean('sender_flag');

			$table->integer('user_id')->unsigned();
			$table->foreign('user_id')->references('id')->on('users');

			$table->integer('rec_id')->unsigned();
			$table->foreign('rec_id')->references('rec_id')->on('recruitment');

		});

		Schema::create('registration',function(Blueprint $table)
		{
			$table->increments('reg_id');
			$table->integer('rec_id')->unsigned();
			$table->foreign('rec_id')->references('rec_id')->on('recruitment');
			$table->integer('user_id')->unsigned();
			$table->foreign('user_id')->references('id')->on('users');

		});

	
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('activities');

		Schema::drop('advise_activity');
		Schema::drop('manage_activity');
		Schema::drop('activity_department');
		Schema::drop('interest_department');
		Schema::drop('recruitment');
		Schema::drop('application');
		Schema::drop('registration');
		
	}

}
