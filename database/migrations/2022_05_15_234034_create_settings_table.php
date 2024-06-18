<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSettingsTable extends Migration {

	public function up()
	{
		Schema::create('settings', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('fb_link')->nullable();
			$table->string('insta_link')->nullable();
			$table->string('tw_link')->nullable();
			$table->string('whatsapp')->nullable();
			$table->string('headline_en_1')->nullable();
			$table->string('headline_en_2')->nullable();
			$table->string('headline_en_3')->nullable();
			$table->string('headline_ar_1')->nullable();
			$table->string('headline_ar_2')->nullable();
			$table->string('headline_ar_3')->nullable();
			$table->text('desc_en_1')->nullable();
			$table->text('desc_en_2')->nullable();
			$table->text('desc_en_3')->nullable();
			$table->text('desc_ar_1')->nullable();
			$table->text('desc_ar_2')->nullable();
			$table->text('desc_ar_3')->nullable();
			$table->string('about_image')->nullable();
			$table->longText('about_en');
			$table->longText('about_ar');
			$table->string('menu_image')->nullable();
			$table->text('menu_text_en')->nullable();
			$table->text('menu_text_ar')->nullable();
			$table->string('contact_image')->nullable();
			$table->string('form_image')->nullable();
			$table->string('start_day')->nullable();
			$table->string('end_day')->nullable();
			$table->time('start_hour')->nullable();
			$table->time('end_hour')->nullable();
			$table->string('tax')->nullable();
			$table->string('footer_image')->nullable();
		});
	}

	public function down()
	{
		Schema::drop('settings');
	}
}