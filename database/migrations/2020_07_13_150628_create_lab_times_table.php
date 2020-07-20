<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLabTimesTable extends Migration {

	public function up()
	{
		Schema::create('lab_times', function(Blueprint $table) {
			$table->increments('id');
			$table->datetime('start_date');
			$table->datetime('end_date');
			$table->enum('status', array('available', 'booked', 'closed'));
			$table->integer('lab_id')->unsigned();
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('lab_times');
	}
}