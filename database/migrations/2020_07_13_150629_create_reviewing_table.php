<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateReviewingTable extends Migration {

	public function up()
	{
		Schema::create('reviewing', function(Blueprint $table) {
			$table->increments('id');
			$table->text('review');
			$table->integer('patient_id')->unsigned();
			$table->string('userable_type');
			$table->integer('userable_id')->unsigned();
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('reviewing');
	}
}