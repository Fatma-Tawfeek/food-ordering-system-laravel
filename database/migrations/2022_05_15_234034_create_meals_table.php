<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMealsTable extends Migration {

	public function up()
	{
		Schema::create('meals', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name_en');
			$table->text('description_en');
			$table->decimal('price');
			$table->string('thumbnail');
			$table->string('day');
			$table->integer('category_id')->unsigned()->nullable();
			$table->integer('quantity');
			$table->timestamps();
			$table->string('name_ar');
			$table->text('description_ar');
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('meals');
	}
}
