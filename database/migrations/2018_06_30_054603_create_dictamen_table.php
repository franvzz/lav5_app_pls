<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDictamenTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('dictamen', function(Blueprint $table)
		{
			$table->bigIncrements('id');
			$table->integer('year');
			$table->integer('mes');
			$table->string('pdf');
			$table->string('pdf_comentarios');
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
		Schema::drop('dictamen');
	}

}
