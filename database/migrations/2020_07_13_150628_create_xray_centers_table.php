<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateXrayCentersTable extends Migration {

	public function up()
	{
		Schema::create('xray_centers', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name');
			$table->text('logo');
			$table->string('address')->nullable();
			$table->text('description')->nullable();
			$table->string('phone')->unique();
			$table->string('password');
			$table->rememberToken();
			$table->softDeletes();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('xray_center');
	}
}