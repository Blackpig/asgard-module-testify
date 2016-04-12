<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestifyTestimonialsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('testify__testimonials', function(Blueprint $table) {
			$table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('salutation', 15)->nullable();
            $table->string('first_name', 25);
            $table->string('last_name', 25);
            $table->string('job_title', 30)->nullable();
            $table->string('company', 50)->nullable();
            $table->string('town', 50)->nullable();
            $table->string('state', 50)->nullable();
            $table->string('country', 50)->nullable();
            $table->text('testimomnial');
            $table->integer('mask_id')->unsigned();

            $table->foreign('mask_id')
                ->references('id')
                ->on('testify__masks');

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
		Schema::drop('testify__testimonials');
	}
}
