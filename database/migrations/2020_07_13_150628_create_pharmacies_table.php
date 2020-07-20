<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePharmaciesTable extends Migration {

	public function up()
	{
		Schema::create('pharmacies', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->string('name');
			$table->text('logo')->nullable();
			$table->string('address')->nullable();
			$table->string('phone')->unique();
			$table->string('password');
			$table->rememberToken();
		});
	}

	public function down()
	{
		Schema::drop('pharmacies');
	}
}