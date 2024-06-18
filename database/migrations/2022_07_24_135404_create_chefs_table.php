<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChefsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chefs', function (Blueprint $table) {
            $table->id();
            $table->string('name_en');
			$table->text('description_en');			
			$table->string('image')->nullable();
			$table->string('name_ar');
			$table->text('description_ar');
            $table->string('fb_link')->nullable();
			$table->string('insta_link')->nullable();
			$table->string('tw_link')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chefs');
    }
}
