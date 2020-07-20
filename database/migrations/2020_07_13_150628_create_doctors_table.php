<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDoctorsTable extends Migration {

	public function up()
	{
		Schema::create('doctors', function(Blueprint $table) {
			$table->increments('id');
			$table->string('first_name');
			$table->string('last_name');
			$table->string('phone')->unique();
			$table->string('password');
			$table->text('image');
			$table->string('address');
			$table->text('description');
			$table->integer('department_id')->unsigned();
			$table->date('birth_date')->nullable();
			$table->enum('gender', array('male', 'female'))->nullable();
			$table->text('Qr_code')->nullable();
			$table->string('activation_code')->nullable();
			$table->rememberToken();
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('doctors');
	}
}