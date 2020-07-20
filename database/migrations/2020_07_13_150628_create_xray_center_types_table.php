<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateXrayCenterTypesTable extends Migration {

	public function up()
	{
		Schema::create('xray_center_types', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('type_id')->unsigned();
			$table->integer('center_id')->unsigned();
			$table->integer('price')->unsigned();
			$table->integer('service_id')->unsigned();
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('xray_center_types');
	}
}