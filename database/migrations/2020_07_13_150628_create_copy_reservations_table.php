<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCopyReservationsTable extends Migration {

	public function up()
	{
		Schema::create('copy_reservations', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('doctor_id')->unsigned();
			$table->integer('patient_id')->unsigned();
			$table->enum('status', array('Accepted', 'Rejected', 'Waiting'));
			$table->integer('reservation_id')->unsigned();
			$table->boolean('admin_approval');
			$table->datetime('time');
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('copy_reservations');
	}
}