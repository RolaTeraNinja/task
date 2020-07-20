<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEmergencyOrdersTable extends Migration {

	public function up()
	{
		Schema::create('emergency_orders', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('patient_id')->unsigned();
			$table->integer('medical_department_id')->unsigned();
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('emergency_orders');
	}
}