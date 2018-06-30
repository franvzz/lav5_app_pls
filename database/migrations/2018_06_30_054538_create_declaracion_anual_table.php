<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDeclaracionAnualTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('declaracion_anual', function(Blueprint $table)
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
		Schema::drop('declaracion_anual');
	}

}
