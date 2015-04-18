<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAffiliationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('affiliations',function(Blueprint $table)
		{
			$table->increments('aff_id');
			$table->boolean('faculty_flag');
			$table->string('name');

		});

		Schema::create('affiliated',function(Blueprint $table)
		{
			$table->integer('user_id')->unsigned();
			$table->foreign('user_id')->references('id')->on('users');

			$table->integer('aff_id')->unsigned();
			$table->foreign('aff_id')->references('aff_id')->on('affiliations');

			$table->primary(['user_id','aff_id']);
		});

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{

		Schema::drop('affiliations');
		Schema::drop('affiliated');
	}

}
