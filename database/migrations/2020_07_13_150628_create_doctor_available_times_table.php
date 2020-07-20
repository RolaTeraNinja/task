<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDoctorAvailableTimesTable extends Migration {

	public function up()
	{
		Schema::create('doctor_available_times', function(Blueprint $table) {
			$table->increments('id');
			$table->datetime('start_date');
			$table->datetime('end_date');
			$table->integer('doctor_id')->unsigned();
			$table->enum('status', array('available', 'booked', 'closed'));
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('doctor_available_times');
	}
}