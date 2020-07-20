<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateXrayReservationTable extends Migration {

	public function up()
	{
		Schema::create('xray_reservation', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('patient_id')->unsigned();
			$table->integer('center_id')->unsigned();
			$table->integer('xray_type_id')->unsigned();
			$table->datetime('time');
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('xray_reservation');
	}
}