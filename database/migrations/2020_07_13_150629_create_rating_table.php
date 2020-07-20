<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRatingTable extends Migration {

	public function up()
	{
		Schema::create('rating', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('rate')->default('5');
			$table->integer('patient_id')->unsigned();
			$table->string('userable_type');
			$table->integer('userable_id')->unsigned();
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('rating');
	}
}