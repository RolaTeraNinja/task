<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePharmcyServiceTable extends Migration {

	public function up()
	{
		Schema::create('pharmcy_service', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('pharmcy_id')->unsigned();
			$table->integer('service_id')->unsigned();
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('pharmcy_service');
	}
}