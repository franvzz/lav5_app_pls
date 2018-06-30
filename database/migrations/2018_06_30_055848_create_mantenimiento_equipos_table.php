<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMantenimientoEquiposTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('mantenimiento_equipos', function(Blueprint $table)
		{
			$table->bigIncrements('id');

			$table->bigInteger('categoria_id')->unsigned();
			$table->foreign('categoria_id')->references('id')->on('mantenimiento_categorias');

			$table->bigInteger('subcategoria_id')->unsigned();
			$table->foreign('subcategoria_id')->references('id')->on('mantenimiento_categorias');

			$table->string('foto');
			$table->string('nombre');
			$table->string('marca');
			$table->string('modelo');
			$table->string('alimentacion');
			$table->string('capacidad');
			$table->string('cantidad');
			$table->string('fecha_instalacion');
			$table->string('vida_util');
			$table->string('encargado_de_mtto');
			$table->string('nivel');
			$table->string('ubicacion');
			$table->string('mapa');
			$table->string('observaciones');

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
		Schema::drop('mantenimiento_equipos');
	}

}
