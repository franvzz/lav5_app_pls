<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProyectosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('proyectos', function(Blueprint $table)
		{
			$table->bigIncrements('id');
			$table->string('nombre');
			$table->string('descripcion');
			$table->string('fecha_inicio');
			$table->string('fecha_fin');
			$table->string('avance');
			$table->string('encargado');
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
		Schema::drop('proyectos');
	}

}
