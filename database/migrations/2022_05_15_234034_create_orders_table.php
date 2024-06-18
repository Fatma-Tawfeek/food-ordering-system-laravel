<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOrdersTable extends Migration {

	public function up()
	{
		Schema::create('orders', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name');
			$table->string('phone');
			$table->text('address');
			$table->integer('quantity');
            $table->string('day')->nullable();
			$table->string('preferred_delivery_time');
			$table->enum('state', array('pending', 'accepted', 'rejected', 'completed'))->default('pending');
			$table->text('notes')->nullable();
			$table->integer('meal_id')->unsigned()->nullable();
            $table->integer('wmeal_id')->unsigned()->nullable();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('orders');
	}
}
