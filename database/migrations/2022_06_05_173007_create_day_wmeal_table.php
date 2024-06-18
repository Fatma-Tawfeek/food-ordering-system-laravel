<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDayWmealTable extends Migration {

	public function up()
	{
		Schema::create('day_wmeal', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('wmeal_id')->unsigned();
			$table->integer('day_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('day_wmeal');
	}
}