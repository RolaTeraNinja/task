<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLabAnalysisTypeTable extends Migration {

	public function up()
	{
		Schema::create('lab_analysis_type', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('lab_id')->unsigned();
			$table->integer('analysis_type_id')->unsigned();
			$table->integer('price')->unsigned();
			$table->integer('service_id')->unsigned();
			$table->string('password');
			$table->rememberToken();
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('lab_analysis_type');
	}
}