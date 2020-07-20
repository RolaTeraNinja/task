<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateReservationsTable extends Migration {

	public function up()
	{
		Schema::create('reservations', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('service_id')->unsigned();
			$table->integer('price')->unsigned();
			$table->integer('doctor_id')->unsigned();
			$table->integer('patient_id')->unsigned();
			$table->enum('status', array('Accepted', 'Rejected', 'Waiting'));
			$table->text('rejected_reasons')->nullable();
			$table->datetime('reservation_time')->nullable();
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('reservations');
	}
}