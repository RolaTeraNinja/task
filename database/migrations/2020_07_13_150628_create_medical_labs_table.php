<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMedicalLabsTable extends Migration {

	public function up()
	{
		Schema::create('medical_labs', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name');
			$table->text('logo')->nullable();
			$table->text('description')->nullable();
			$table->string('address')->nullable();
			$table->string('phone')->unique();
			$table->string('password');
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('medical_labs');
	}
}