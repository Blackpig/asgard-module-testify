<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestifyTestimonialsTranslationsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('testify__testimonials_translations', function(Blueprint $table) {
			$table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('salutation');
            $table->string('job_title');
            $table->text('country');
            $table->text('testimonial');

            $table->integer('testimonials_id')->unsigned();
            $table->string('locale')->index();
            $table->unique(['testimonials_id', 'locale']);
            $table->foreign('testimonials_id')->references('id')->on('testify__testimonials')->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('testify__testimonials_translations');
	}
}
