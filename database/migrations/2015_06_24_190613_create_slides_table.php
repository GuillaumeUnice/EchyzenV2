<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSlidesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('slides', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('title', 255)->nullable();
            $table->text('content')->nullable();
            $table->string('alt', 255)->nullable();
            $table->string('url', 255)->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('slides');
    }
}
