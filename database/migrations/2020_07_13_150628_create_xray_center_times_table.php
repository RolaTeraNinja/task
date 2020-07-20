<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateXrayCenterTimesTable extends Migration {

	public function up()
	{
		Schema::create('xray_center_times', function(Blueprint $table) {
			$table->increments('id');
			$table->datetime('start_date');
			$table->datetime('end_date');
			$table->integer('center_id')->unsigned();
			$table->enum('status', array('available', 'booked', 'closed'));
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('xray_center_times');
	}
}