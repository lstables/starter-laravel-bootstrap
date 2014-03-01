<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateIdCardsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('id_cards', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('user_id');
			$table->integer('new_card');
			$table->integer('overlay_card');
			$table->string('other');
			$table->string('name');
			$table->string('job_title');
			$table->string('dept');
			$table->string('directorate');
			$table->string('work_tel_no');
			$table->string('site');
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
		Schema::drop('id_cards');
	}

}
