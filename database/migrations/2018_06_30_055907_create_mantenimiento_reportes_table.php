<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMantenimientoReportesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('mantenimiento_reportes', function(Blueprint $table)
		{
			$table->bigIncrements('id');

			$table->bigInteger('contrato_id')->unsigned();
			$table->foreign('contrato_id')->references('id')->on('mantenimiento_contratos');

			$table->bigInteger('equipo_id')->unsigned();
			$table->foreign('equipo_id')->references('id')->on('mantenimiento_equipos');

			$table->integer('year');
			$table->integer('mes');
			$table->string('pdf');
			$table->string('comentarios');

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
		Schema::drop('mantenimiento_reportes');
	}

}
