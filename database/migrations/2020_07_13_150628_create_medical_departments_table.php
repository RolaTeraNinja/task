<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMedicalDepartmentsTable extends Migration {

	public function up()
	{
		Schema::create('medical_departments', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name');
			$table->string('description')->nullable();
			$table->text('logo');
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('medical_departments');
	}
}