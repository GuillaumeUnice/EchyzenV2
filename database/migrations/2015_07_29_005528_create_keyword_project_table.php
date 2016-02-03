<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKeywordProjectTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('keyword_project', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('keyword_id')->unsigned();
            $table->foreign('keyword_id')->references('id')->on('keywords')->on('keywords')->onDelete('cascade');
            $table->integer('project_id')->unsigned();
            $table->foreign('project_id')->references('id')->on('projects')->on('projects')->onDelete('cascade');
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
        Schema::drop('keyword_project');
	}

}
