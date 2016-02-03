<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateProjectsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('projects', function(Blueprint $table)
        {
            $table->increments('id');
            $table->text('preamble')->nullable();
            $table->text('introduction')->nullable();
            $table->integer('level', false, true);
            $table->integer('progress', false, true)->default(0);
            $table->dateTime('start_day')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->dateTime('end_day')->nullable();
            $table->string('priority', 255);
            $table->string('software', 255)->nullable();
            $table->text('goal');

            $table->string('url_image_first', 255);
            $table->string('alt_image_first', 255);

            $table->string('title', 255);
            $table->string('url_image_title', 255);
            $table->string('alt_image_title', 255);
            $table->text('content');
            $table->text('conclusion')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('projects');
    }
}
