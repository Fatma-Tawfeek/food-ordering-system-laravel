<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('meals', function(Blueprint $table) {
			$table->foreign('category_id')->references('id')->on('categories')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('orders', function(Blueprint $table) {
			$table->foreign('meal_id')->references('id')->on('meals')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('images', function(Blueprint $table) {
			$table->foreign('meal_id')->references('id')->on('meals')
						->onDelete('cascade')
						->onUpdate('cascade');
		});

	}

	public function down()
	{
		Schema::table('meals', function(Blueprint $table) {
			$table->dropForeign('meals_category_id_foreign');
		});
		Schema::table('orders', function(Blueprint $table) {
			$table->dropForeign('orders_meal_id_foreign');
		});
		Schema::table('images', function(Blueprint $table) {
			$table->dropForeign('images_meal_id_foreign');
		});
	}
}
