<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMantenimientoContratosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('mantenimiento_contratos', function(Blueprint $table)
		{
			$table->bigIncrements('id');

			$table->bigInteger('equipo_id')->unsigned();
			$table->foreign('equipo_id')->references('id')->on('mantenimiento_equipos');

			$table->bigInteger('proveedor_id')->unsigned();
			$table->foreign('proveedor_id')->references('id')->on('proveedores');

			$table->string('pdf');

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
		Schema::drop('mantenimiento_contratos');
	}

}
