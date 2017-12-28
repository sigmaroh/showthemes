<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateThemesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('themes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('slug')->unique();
			$table->string('title');
			$table->text('image_url');
			$table->text('image_url_details');
			$table->text('details');
			$table->text('download_url');
			$table->text('theme_url');
			$table->string('category');
			$table->string('active_installs');
			$table->string('rating');
			$table->string('updated');
			$table->string('tags');
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
        Schema::drop('themes');
    }
}
