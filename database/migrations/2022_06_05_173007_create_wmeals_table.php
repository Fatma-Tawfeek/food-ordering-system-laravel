<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWmealsTable extends Migration {

	public function up()
	{
		Schema::create('wmeals', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('name_en');
			$table->string('name_ar');
			$table->text('description_en');
			$table->text('description_ar');
			$table->decimal('price');
			$table->string('thumbnail');
			$table->integer('quantity');
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('wmeals');
	}
}
