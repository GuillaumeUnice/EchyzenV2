<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('username', 255)->unique();
            $table->string('email', 255)->unique();
            $table->string('password', 64);
            $table->string('remember_token', 100)->nullable();

            $table->boolean('confirmed')->default(0);
            $table->string('token')->nullable();

            $table->boolean('newsletter')->default(0);
            $table->integer('image_size')->unsigned()->default(0);
            $table->integer('role')->unsigned()->default(0);

            $table->string('website', 255)->nullable();
            $table->string('twitter', 60)->nullable();
            $table->string('facebook', 60)->nullable();
            $table->string('viadeo', 60)->nullable();
            $table->string('linkedin', 60)->nullable();
            $table->string('google+', 60)->nullable();

            $table->timestamp('birthday')->nullable();
            $table->string('country', 255)->nullable();
            $table->string('signature', 255)->nullable();
            $table->string('sexe', 255)->nullable();
            $table->string('hobby', 255)->nullable();
            $table->string('job', 255)->nullable();

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
		Schema::drop('users');
	}

}
