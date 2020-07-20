<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePatientsTable extends Migration {

	public function up()
	{
		Schema::create('patients', function(Blueprint $table) {
			$table->increments('id');
			$table->string('first_name');
			$table->string('last_name');
			$table->string('phone')->unique();
			$table->string('password');

			$table->text('image');
			$table->string('birth_date');
			
			
			$table->softDeletes();
			$table->timestamps();
		 
		});
	}

	public function down()
	{
		Schema::drop('patients');
	}
}