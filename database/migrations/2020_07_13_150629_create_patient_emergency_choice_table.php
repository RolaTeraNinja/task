<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePatientEmergencyChoiceTable extends Migration {

	public function up()
	{
		Schema::create('patient_emergency_choice', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('patient_id')->unsigned();
			$table->integer('choice_id')->unsigned();
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('patient_emergency_choice');
	}
}