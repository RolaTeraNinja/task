<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMedicineOrdersTable extends Migration {

	public function up()
	{
		Schema::create('medicine_orders', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('pharmcy_id')->unsigned();
			$table->integer('patient_id')->unsigned();
			$table->text('medicine_image')->nullable();
			$table->string('medicine_name')->nullable();
			$table->integer('total_price')->unsigned()->nullable();
			$table->text('notes')->nullable();
			$table->enum('status', array('waiting', 'InProcess', 'InAway', 'Done', 'Cancelled', 'Returned'));
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('medicine_orders');
	}
}