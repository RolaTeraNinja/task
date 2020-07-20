<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDoctorServicesTable extends Migration {

	public function up()
	{
		Schema::create('doctor_services', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('doctor_id')->unsigned();
			$table->integer('service_id')->unsigned();
			$table->integer('price')->unsigned();
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('doctor_services');
	}
}