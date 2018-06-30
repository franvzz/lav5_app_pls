<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstadoFinancieroMensualTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('estado_financiero_mensual', function(Blueprint $table)
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
		Schema::drop('estado_financiero_mensual');
	}

}
