<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAcceptedEmergencyTable extends Migration {

	public function up()
	{
		Schema::create('accepted_emergency', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('doctor_id')->unsigned();
			$table->integer('order_id')->unsigned();
			$table->integer('price')->unsigned();
			$table->datetime('arrival_time')->nullable();
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('accepted_emergency');
	}
}