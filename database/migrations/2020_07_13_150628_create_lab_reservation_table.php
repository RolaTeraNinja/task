<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLabReservationTable extends Migration {

	public function up()
	{
		Schema::create('lab_reservation', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('patient_id')->unsigned();
			$table->integer('lab_id')->unsigned();
			$table->integer('lab_analysis_id')->unsigned();
			$table->enum('required_gender', array('male', 'female'));
			$table->datetime('time');
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('lab_reservation');
	}
}