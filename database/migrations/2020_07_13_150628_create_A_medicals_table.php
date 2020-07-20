<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAMedicalsTable extends Migration {

	public function up()
	{
		Schema::create('A_medicals', function(Blueprint $table) {
			$table->increments('id');
			$table->text('report')->nullable();
			$table->text('specific_food')->nullable();
			$table->text('prescriptions')->nullable();
			$table->text('medical_analysis')->nullable();
			$table->text('medical_xray')->nullable();
			$table->integer('reservation_id')->unsigned()->nullable();
			$table->text('notes')->nullable();
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('A_medicals');
	}
}